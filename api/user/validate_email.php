<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once '../models/User.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog user object
  $user = new User($db);

  // Get ID
  $data = json_decode(file_get_contents("php://input"));
  $user->email = $data->email;

  // Get user
  $result = $user->validate_email();

  // Create array
//   $post_arr = array(
//     'name' => $user->name,
//     'email' => $user->email,
//     'password' => $user->password,
//     'role' => $user->role,
//     'message' => 'Email Exists'
//   );
  // Make JSON

  // Get row count
  $num = $result->rowCount();

  if($num > 0) {
    // print_r(json_encode($post_arr));
    echo json_encode(
        array('message' => 'Email Exists')
    );
  } else {
    echo json_encode(
        array('message' => 'Email Not Exists')
    );
  }