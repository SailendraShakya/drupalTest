<?php

namespace Drupal\mydata\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class MydataForm.
 *
 * @package Drupal\mydata\Form
 */
class ImportCsvForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'import_csv_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['csv_file'] = array(
      '#type' => 'file',
      '#title' => t('Upload Csv File:'),
      '#required' => TRUE,
      );

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Import CSV'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {

//         $name = $form_state->getValue('candidate_name');
//          if(preg_match('/[^A-Za-z]/', $name)) {
//             $form_state->setErrorByName('candidate_name', $this->t('your name must in characters without space'));
//          }
//


    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

      if (!empty($_FILES['files'])) {
          $targetDirectory = 'uploads/';

          // Ensure the target directory exists or create it.
          if (!file_exists($targetDirectory)) {
              mkdir($targetDirectory, 0777, true);
          }

          // Generate a unique filename for the uploaded file.
          $timestamp = time();
          $targetFile = $targetDirectory . $timestamp . '_' . basename($_FILES['files']['name']);
//          echo '<pre>';
//          print_r($targetFile);
          die('testing');

          // Check if the file has a valid CSV file extension.
          $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

          if ($fileExtension === 'csv') {
              // Move the uploaded file to the target directory.
              if (move_uploaded_file($_FILES['csv_file']['tmp_name'], $targetFile)) {
                  // Read and process the CSV file.
                  $csvData = [];
                  if (($handle = fopen($targetFile, 'r')) !== false) {
                      while (($row = fgetcsv($handle)) !== false) {
                          $csvData[] = $row;
                      }
                      fclose($handle);

                      print_r($csvData);
                      die('testing');

                      echo '<table>';
                      foreach ($csvData as $row) {
                          echo '<tr>';
                          foreach ($row as $cell) {
                              echo '<td>' . htmlspecialchars($cell) . '</td>';
                          }
                          echo '</tr>';
                      }
                      echo '</table>';
                  } else {
                      echo 'Error reading the CSV file.';
                  }
              } else {
                  echo 'Error uploading the file.';
              }
          } else {
              echo 'Invalid file format. Please upload a CSV file.';
          }

      }

      die('after if');
    $field=$form_state->getValues();
    $name=$field['candidate_name'];
    //echo "$name";
    $number=$field['mobile_number'];
    $email=$field['candidate_mail'];
    $age=$field['candidate_age'];
    $gender=$field['candidate_gender'];
    $website=$field['web_site'];


    if (isset($_GET['num'])) {
          $field  = array(
              'name'   => $name,
              'mobilenumber' =>  $number,
              'email' =>  $email,
              'age' => $age,
              'gender' => $gender,
              'website' => $website,
          );
          $query = \Drupal::database();
          $query->update('mydata')
              ->fields($field)
              ->condition('id', $_GET['num'])
              ->execute();
          drupal_set_message("succesfully updated");
          $form_state->setRedirect('mydata.display_table_controller_display');

      }

       else
       {
           $field  = array(
              'name'   =>  $name,
              'mobilenumber' =>  $number,
              'email' =>  $email,
              'age' => $age,
              'gender' => $gender,
              'website' => $website,
          );
           $query = \Drupal::database();
           $query ->insert('mydata')
               ->fields($field)
               ->execute();


         \Drupal::messenger()->addMessage("User Details Submitted Successfully");

           $response = new RedirectResponse("/mydata/hello/table");
           $response->send();
       }
     }

}
