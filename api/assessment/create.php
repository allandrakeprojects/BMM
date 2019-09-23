<?php 
  

  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../config/Database.php';
  include_once '../models/Assessment.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog assessment object
  $assessment = new Assessment($db);

  // Get raw assessmented data
  $data = json_decode(file_get_contents("php://input"));
  $assessment->user_id = $data->user_id;
  $assessment->score = $data->score;

  // Create assessment
  if($assessment->create()) {
    echo json_encode(
      array('message' => 'Assessment Submitted')
    );
    session_start();
    $_SESSION['user_id'] = $data->user_id;
    $_SESSION['score'] = $data->score;
  } else {
    echo json_encode(
      array('message' => 'Assessment Not Submitted')
    );
  }