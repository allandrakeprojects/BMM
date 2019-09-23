<?php 
  class User {
    // DB stuff
    private $conn;
    private $table_user = 'user';
    private $table_assessment = 'assessment';

    // Post Properties
    public $name;
    public $email;
    public $password;
    public $status;
    
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // POST api/user/create
    public function create() {
      // Create query
      $query = 'INSERT INTO ' . $this->table_user . ' SET name = :name, email = :email, password = :password';
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->name = htmlspecialchars(strip_tags($this->name));
      $this->email = htmlspecialchars(strip_tags($this->email));
      $this->password = htmlspecialchars(strip_tags($this->password));
      
      // Bind data
      $stmt->bindParam(':name', $this->name);
      $stmt->bindParam(':email', $this->email);
      $stmt->bindParam(':password', $this->password);

      // Execute query
      if($stmt->execute()) {
        return true;
      }
    }

    // GET api/user/validate_email
    public function validate_email(){
      // Create query
      $query = 'SELECT *
        FROM ' . $this->table_user . ' 
        WHERE
          email = ?
        LIMIT 0,1';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->email);

      // Execute query
      $stmt->execute();
      
      // $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // // Set properties
      // $this->name = $row['name'];
      // $this->email = $row['email'];
      // $this->password = $row['password'];
      // $this->role = $row['role'];
      return $stmt;
    }

    // GET api/user/login
    public function login() {
      // Create query
      $query = 'SELECT *
        FROM ' . $this->table_user . ' LEFT JOIN ' . $this->table_assessment . ' on user.id=assessment.user_id
        WHERE
          user.email = ?
        LIMIT 0,1';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->email);

      $password = $this->password;

      // Execute query
      $stmt->execute();
      
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // Set properties
      $passwordHash = $row['password'];

      if(password_verify($password, $passwordHash)){
        session_start();
        if(strlen($row['user_id']) > 0){
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['score'] = $row['score'];
        } else {
          $_SESSION['user_id'] = '';
        }
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        $this->role = $row['role'];
        $this->status = 'success';
      } else {
        $this->status = 'failed';
      }

      return $stmt;
    }
  }