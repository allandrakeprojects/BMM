  <?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../config/Database.php';
  include_once '../models/User.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog user object
  $user = new User($db);

  // Get raw usered data
  $data = json_decode(file_get_contents("php://input"));
  $user->name = $data->name;
  $user->email = $data->email;
  
  // Encrypt password
  $hash = password_hash($data->password, PASSWORD_BCRYPT);
  $user->password = $hash;

  // Create user
  if($user->create()) {
    echo json_encode(
      array('message' => 'User Created')
    );
  } else {
    echo json_encode(
      array('message' => 'User Not Created')
    );
  }