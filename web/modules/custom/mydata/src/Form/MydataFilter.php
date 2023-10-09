<?php
namespace Drupal\mydata\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;
use Drupal\Core\Routing;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;


/**
 * Provides the form for filter Students.
 */
class MydataFilter extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dn_student_filter_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['filters']['fname'] = [
      '#title'         => 'First Name',
      '#type'          => 'search'
    ];

    $form['filters']['marks'] = [
      '#title'         => 'Marks',
      '#type'          => 'search'
    ];

    $form['filters']['actions'] = [
      '#type'       => 'actions'
    ];

    $form['filters']['actions']['previous'] = [
      '#type'  => 'submit',
      '#title' => 'csv',
      '#submit' => array([$this, 'previousForm']),
      '#value' => $this->t('CSV')
    ];

    $form['filters']['actions']['submit'] = [
      '#type'  => 'submit',
      '#value' => $this->t('Filter')
    ];

    return $form;

  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    if ( $form_state->getValue('fname') == "") {
      $form_state->setErrorByName('from', $this->t('You must enter a valid first name.'));
    }elseif( $form_state->getValue('marks') == ""){
      $form_state->setErrorByName('marks', $this->t('You must enter a valid to marks.'));
    }

  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array & $form, FormStateInterface $form_state) {
    $field = $form_state->getValues();
    $fname = $field["fname"];
    $marks = $field["marks"];
    $url = \Drupal\Core\Url::fromRoute('mydata.display_table_controller_display')
      ->setRouteParameters(array('fname'=>$fname,'marks'=>$marks));
    $form_state->setRedirectUrl($url);
  }

  public static function previousForm(array &$form, FormStateInterface $form_state) {
    $fields = array('id', 'name'); // CSV column headings
    $delimiter = ",";
    $filename = "export-".date('Y-m-d-H-i-s').".csv";
    $f = fopen("php://output", "w");
    fputcsv($f, $fields, $delimiter);
    $array = array(
      array("id"=>1, "name"=>"Javed Ur Rehman"), // first row
      array("id"=>2, "name"=>"Syed Ahsan Kamal"), // second row
      array("id"=>3, "name"=>"Abdul Muqeet Arab") // third row
    );
    foreach($array as $row){
      // Adding data into CSV
      $row_data = array($row['id'], $row['name']);
      fputcsv($f, $row_data, $delimiter);
    }
    fclose($f);
    // Telling browser to download file as CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    exit();

//    // Generate CSV data (replace with your data generation logic).
//    $csv_data = [
//      ['Name', 'Email'],
//      ['John Doe', 'john@example.com'],
//      ['Jane Smith', 'jane@example.com'],
//    ];
//
//    // Create a CSV file and send it for download.
//    $csv_filename = 'exported_data.csv';
//    $csv_file = fopen('php://temp', 'w+');
//
//    foreach ($csv_data as $row) {
//      fputcsv($csv_file, $row);
//    }
//
//    fseek($csv_file, 0);
//
//    $response = new Response(stream_get_contents($csv_file));
//    fclose($csv_file);
//
//    $response->headers->set('Content-Type', 'text/csv');
//    $response->headers->set('Content-Disposition', 'attachment; filename="' . $csv_filename . '"');
//
//    return $response;




//    $table = $form["table"];
//
//    $path = \Drupal::service('extension.list.theme')->getPath("portfolio", "assurance_annulation").'/export/';
//    $filename = 'export.csv';
//    $headers = [
//      'Content-Type' => 'text/csv',
//      'Content-Description' => 'File Download',
//      'Content-Disposition' => 'attachment; filename=' . $filename
//    ];
//
//    $uri = $path.$filename;
//
//    dpm(file_exists($uri));
//    dpm($uri);
//
//    return new BinaryFileResponse($uri, 200, $headers, true );
  }

}
