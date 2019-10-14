<?php 
    class Assessment {
        // DB stuff
        private $conn;
        private $table_user = 'user';
        private $table_assessment = 'assessment';

        // Post Properties
        public $id;
        public $user_id;
        public $score;

        // Constructor with DB
        public function __construct($db) {
            $this->conn = $db;
        }

        // POST api/assessment/create
        public function create() {
            // Create query
            $query = 'INSERT INTO ' . $this->table_assessment . ' SET user_id = :user_id, score = :score, takes_no = :takes_no';
            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data
            $this->name = htmlspecialchars(strip_tags($this->user_id));
            $this->email = htmlspecialchars(strip_tags($this->score));
            $this->takes_no = htmlspecialchars(strip_tags($this->takes_no));

            // Bind data
            $stmt->bindParam(':user_id', $this->user_id);
            $stmt->bindParam(':score', $this->score);
            $stmt->bindParam(':takes_no', $this->takes_no);

            // Execute query
            if($stmt->execute()) {
                return true;
            }
        }

        public function read() {
            // Create query
            $query = 'SELECT user.id, user.name, user.email, user.role, assessment.user_id, max(assessment.score) as score, count(assessment.takes_no) as takes_no
            FROM ' . $this->table_user . ' LEFT JOIN ' . $this->table_assessment . ' on user.id=assessment.user_id WHERE user.role != "Administrator" GROUP BY user.email';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }
    }