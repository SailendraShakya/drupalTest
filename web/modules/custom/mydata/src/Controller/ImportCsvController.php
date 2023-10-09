<?php

namespace Drupal\mydata\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;

/**
 * Class DisplayTableController.
 *
 * @package Drupal\mydata\Controller
 */
class ImportCsvController extends ControllerBase {


  public function getContent() {
    // First we'll tell the user what's going on. This content can be found
    // in the twig template file: templates/description.html.twig.
    // @todo: Set up links to create nodes and point to devel module.
    $build = [
      'description' => [
        '#theme' => 'mydata_description',
        '#description' => 'foo',
        '#attributes' => [],
      ],
    ];
    return $build;
  }

  /**
   * Display.
   *
   * @return string
   *   Return Hello string.
   */
  public function display() {

    /**return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: display with parameter(s): $name'),
    ];*/

    //create table header
    $header_table = array(
     'id'=>    t('SrNo'),
      'name' => t('Name'),
        'mobilenumber' => t('MobileNumber'),
        'age' => t('Age'),
        'gender' => t('Gender'),
    );

    $name = $_GET['fname'] ?? '';
    $query = \Drupal::database()->select('mydata', 'm');
      $query->fields('m', ['id','name','mobilenumber','email','age','gender','website']);
      if(isset($name) && $name != '')
      {
//        $query->condition('name', '%' . db_like($name) . '%', 'LIKE');
        $query->condition('name', '%' . \Drupal::database()->escapeLike($name). '%', 'LIKE');
      }
      $results = $query->execute()->fetchAll();
        $rows=array();
    foreach($results as $data){
        $delete = Url::fromUserInput('/mydata/form/delete/'.$data->id);
        $edit   = Url::fromUserInput('/mydata/form/mydata?num='.$data->id);

      //print the data from table
             $rows[] = array(
            'id' =>$data->id,
                'name' => $data->name,
                'mobilenumber' => $data->mobilenumber,
                //'email' => $data->email,
                'age' => $data->age,
                'gender' => $data->gender,
            );

    }
    $form['form'] = $this->formBuilder()->getForm('\Drupal\mydata\Form\MydataFilter');
  //display data in site
    $form['table'] = [
            '#type' => 'table',
            '#header' => $header_table,
            '#rows' => $rows,
            '#empty' => t('No users found'),
        ];
    $form['pager'] = [
      '#type' => 'pager'
    ];
        return $form;

  }

}