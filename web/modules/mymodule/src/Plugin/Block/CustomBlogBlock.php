<?php

namespace Drupal\mymodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom Blog Block"),
 *   category = @Translation("Custom Blog Block"),
 * )
 */
class CustomBlogBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $database = \Drupal::database();
    $query = $database->select('node_field_data', 'n');
    $query->fields('n');
    $query->range(0,3);
    $result = $query->execute();
    $records = $result->fetchAll();
    $titles = [];
    foreach ( $records as $value)
    {
      $titles []= $value->body;
    }

    return [
      '#markup' => $this->t('Custom Blog Block'),
    ];
  }

}
