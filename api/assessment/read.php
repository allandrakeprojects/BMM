<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once '../models/Assessment.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate blog assessment object
  $assessment = new Assessment($db);
  // Blog assessment query
  $result = $assessment->read();
  // Get row count
  $num = $result->rowCount();
  // Check if any assessments
  if($num > 0) {
    // Assessment array
    $assessments_arr = array();
    // $assessments_arr['data'] = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      if($takes_no == 0){
        $score = '-';
        $takes_no = 'Not Yet Submitted.';
      }
      $assessment_item = array(
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'role' => $role,
        'score' => $score,
        'takes_no' => $takes_no
      );
      // Push to "data"
      array_push($assessments_arr, $assessment_item);
      // array_push($assessments_arr['data'], $assessment_item);
    }
    // Turn to JSON & output
    echo json_encode($assessments_arr);
  } else {
    // No Assessments
    echo json_encode(
      array('message' => 'No Assessments Found')
    );
  }