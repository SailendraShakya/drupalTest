<?php

namespace Drupal\views_block_override\Plugin\views\display;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\Block\ViewsBlock;
use Drupal\views\Plugin\views\display\Block;

/**
 * A block plugin that allows exposed filters to be configured.
 *
 * @ingroup views_block_override
 *
 * @ViewsDisplay(
 *   id = "views_block_override",
 *   title = @Translation("Block with overrides"),
 *   help = @Translation("Display the view as a block with more configuration options."),
 *   theme = "views_view",
 *   register_theme = FALSE,
 *   uses_hook_block = TRUE,
 *   contextual_links_locations = {"block"},
 *   admin = @Translation("Block with overrides")
 * )
 *
 * @see \Drupal\views\Plugin\block\ViewsBlock
 * @see \Drupal\views\Plugin\Derivative\ViewsBlock
 */
class ViewsBlockOverride extends Block {

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['allow']['contains']['contextual_filter'] = ['default' => 'contextual_filter'];
    $options['allow']['contains']['exposed_sort'] = ['default' => 'exposed_sort'];
    return $options;
  }

  /**
   * Returns plugin-specific settings for the block.
   *
   * @param array $settings
   *   The settings of the block.
   *
   * @return array
   *   An array of block-specific settings to override the defaults provided in
   *   \Drupal\views\Plugin\Block\ViewsBlock::defaultConfiguration().
   *
   * @see \Drupal\views\Plugin\Block\ViewsBlock::defaultConfiguration()
   */
  public function blockSettings(array $settings) {
    $settings = parent::blockSettings($settings);

    // All contextual filters can be overridden.
    $contextual_filters = $this->view->display_handler->getHandlers('argument');
    foreach ($contextual_filters as $id => $contextual_filter) {
      $settings['contextual_filter'][$id]['enabled'] = FALSE;
      $settings['contextual_filter'][$id]['value'] = '';
    }
    $settings['exposed_sort']['sort_by']['value'] = 'title';
    $settings['exposed_sort']['sort_order']['value'] = 'DESC';
    return $settings;
  }

  /**
   * Provide the summary for page options in the views UI.
   *
   * This output is returned as an array.
   */
  public function optionsSummary(&$categories, &$options) {
    parent::optionsSummary($categories, $options);

    $filtered_allow = array_filter($this->getOption('allow'));
    $allowed = [];
    if (isset($filtered_allow['items_per_page'])) {
      $allowed[] = $this->t('Items per page');
    }
    if (isset($filtered_allow['contextual_filter'])) {
      $allowed[] = $this->t('Contextual filters');
    }
    if (isset($filtered_allow['exposed_sort'])) {
      $allowed[] = $this->t('Exposed sort');
    }
    $options['allow'] = [
      'category' => 'block',
      'title' => $this->t('Allow settings'),
      'value' => empty($allowed) ? $this->t('None') : implode(', ', $allowed),
    ];
  }

  /**
   * Adds the configuration form elements specific to this views block plugin.
   *
   * This method allows block instances to override the views exposed filters.
   *
   * @param \Drupal\views\Plugin\Block\ViewsBlock $block
   *   The ViewsBlock plugin.
   * @param array $form
   *   The form definition array for the block configuration form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The renderable form array representing the entire configuration form.
   *
   * @see \Drupal\views\Plugin\Block\ViewsBlock::blockForm()
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   */
  public function blockForm(ViewsBlock $block, array &$form, FormStateInterface $form_state) {
    parent::blockForm($block, $form, $form_state);
    $allow_settings = array_filter($this->getOption('allow'));
    $block_configuration = $block->getConfiguration();
    foreach ($allow_settings as $type => $enabled) {
      if (empty($enabled)) {
        continue;
      }

      if ($type == 'contextual_filter') {
        $items = $this->view->display_handler->getHandlers('argument');
        foreach ($items as $id => $item) {
          if ($type != 'contextual_filter') {
            continue;
          }

          $form['override'][$block->getDerivativeId()][$type][$id]['enabled'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Override %plugin', ['%plugin' => $item->pluginTitle()]),
            '#default_value' => $block_configuration[$type][$id]['enabled'],
          ];
          $value = $block_configuration[$type][$id]['value'];
          $form['override'][$block->getDerivativeId()][$type][$id]['value'] = [
            '#title' => $this->t('Value for %label', ['%label' => $item->pluginTitle()]),
            '#title_display' => 'none',
            '#type' => 'textfield',
            '#default_value' => $value,
            '#states' => [
              'visible' => [
                [
                  ':input[name*="[override][' . $block->getDerivativeId() . '][' . $type . '][' . $id . '][enabled]"]' => ['checked' => TRUE],
                ],
              ],
            ],
          ];

          // If a validator for entity type is set, create an autocomplete.
          if (isset($item->options['validate']) &&
            strpos($item->options['validate']['type'], 'entity:') !== FALSE) {

            $split = explode(':', $item->options['validate']['type']);
            $entity_type = $split[1];
            if (substr($entity_type, -5) == '_type') {
              $bundles = [];
              foreach (\Drupal::service('entity_type.bundle.info')->getBundleInfo(substr($entity_type, 0, -5)) as $key => $bundle) {
                $bundles[$key] = $bundle['label'];
              }

              if ($item->options['break_phrase']) {
                $form['override'][$block->getDerivativeId()][$type][$id]['value']['#type'] = 'checkboxes';
              }
              else {
                $form['override'][$block->getDerivativeId()][$type][$id]['value']['#type'] = 'radios';
              }
              $form['override'][$block->getDerivativeId()][$type][$id]['value']['#options'] = $bundles;
              $form['override'][$block->getDerivativeId()][$type][$id]['value']['#default_value'] = $value;
            }
            else {
              $form['override'][$block->getDerivativeId()][$type][$id]['value']['#type'] = 'entity_autocomplete';
              $form['override'][$block->getDerivativeId()][$type][$id]['value']['#target_type'] = $entity_type;
              if ($value) {
                $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
                $entity = $storage->load($value);
                $form['override'][$block->getDerivativeId()][$type][$id]['value']['#default_value'] = $entity;
              }
              else {
                $form['override'][$block->getDerivativeId()][$type][$id]['value']['#default_value'] = '';
              }
              if (
                isset($item->options['validate_options']) &&
                isset($item->options['validate_options']['bundles'])
              ) {
                $form['override'][$block->getDerivativeId()][$type][$id]['value']['#selection_settings']['target_bundles'] =
                  $item->options['validate_options']['bundles'];
              }

            }

          }
        }
      }

      if ($type == 'exposed_sort') {
        $order_list = [];
        foreach ($this->view->getHandlers('sort') as $field => $handler) {
          // Use exposed label when available, or use machine name as backup.
          if (!empty($handler['expose']['label'])) {
            $order_list[$field] = $handler['expose']['label'];
          }
          else {
            $order_list[$field] = $handler['field'];
          }
        }
        $form['override'][$block->getDerivativeId()][$type]['sort_by'] = [
          '#type' => 'select',
          '#title' => $this->t('Order'),
          '#options' => $order_list,
          '#default_value' => $block_configuration[$type]['sort_by'],
        ];
        $form['override'][$block->getDerivativeId()][$type]['sort_order'] = [
          '#type' => 'select',
          '#title' => $this->t('Sort'),
          '#options' => [
            'ASC' => $this->t('Ascending'),
            'DESC' => $this->t('Descending'),
          ],
          '#default_value' => $block_configuration[$type]['sort_order'],
        ];
      }
    }
    return $form;
  }

  /**
   * Handles form submission for the views block configuration form.
   *
   * @param \Drupal\views\Plugin\Block\ViewsBlock $block
   *   The ViewsBlock plugin.
   * @param array $form
   *   The form definition array for the full block configuration form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \Drupal\views\Plugin\Block\ViewsBlock::blockSubmit()
   */
  public function blockSubmit(ViewsBlock $block, $form, FormStateInterface $form_state) {
    parent::blockSubmit($block, $form, $form_state);

    $overides = $form_state->getValue(['override']);
    $config = $block->getConfiguration();

    foreach ($overides[$block->getDerivativeId()] as $type => $values) {
      foreach ($values as $id => $settings) {
        if (is_array($settings)) {
          if ($settings['enabled']) {
            $config[$type][$id] = [
              'enabled' => TRUE,
              'value' => $settings['value'],
            ];
          }
          else {
            if (isset($config[$type][$id])) {
              unset($config[$type][$id]);
            }
          }
          $form_state->unsetValue(['override', $type, $id]);
        }
        else {
          $config[$type][$id] = [
            'value' => $settings,
          ];
        }
      }
    }
    $block->setConfiguration($config);
  }

  /**
   * Allows to change the display settings right before executing the block.
   *
   * @param \Drupal\views\Plugin\Block\ViewsBlock $block
   *   The block plugin for views displays.
   */
  public function preBlockBuild(ViewsBlock $block) {
    parent::preBlockBuild($block);

    $config = $block->getConfiguration();
    if (!empty($config['exposed_sort'])) {
      // Get original sorts.
      $sorts = $this->view->display_handler->getOption('sorts');

      // Get the selected exposed sort and set it as the only sort option.
      if (!empty($sorts[$config['exposed_sort']['sort_by']['value']])) {
        $exposed_sort = $sorts[$config['exposed_sort']['sort_by']['value']];
        $exposed_sort['order'] = $config['exposed_sort']['sort_order']['value'];
        $this->view->display_handler->setOption('sorts', [$exposed_sort]);
      }
    }

    $this->block = $block;
  }

  /**
   * The display block handler returns the structure necessary for a block.
   */
  public function execute() {
    $config = $this->block->getConfiguration();
    if (!empty($config['contextual_filter'])) {
      $view_args = $this->view->args;
      $index = 0;
      foreach ($config['contextual_filter'] as $values) {
        if ($values['enabled']) {

          // Contextual filters can have multiple values.
          if (is_array($values['value'])) {
            $active_values = [];
            foreach ($values['value'] as $value) {
              if ($value) {
                $active_values[] = $value;
              }
            }
            $values['value'] = implode("+", $active_values);
          }

          $view_args[$index] = $values['value'];
        }

        $index++;
      }
      $this->view->setArguments($view_args);
    }

    return parent::execute();
  }

  /**
   * {@inheritdoc}
   */
  public function usesExposed() {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function displaysExposed() {
    return FALSE;
  }

  /**
   * Provide the default form for setting options.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    if ($form_state->get('section') == 'allow') {
      $form['allow']['#options']['contextual_filter'] = $this->t('Contextual filters');
      $form['allow']['#options']['exposed_sort'] = $this->t('Exposed sort');
    }
  }

}
