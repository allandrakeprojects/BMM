<?php
    class Database {
        // private $host = 'localhost';
        // private $db_name = 'bmm';
        // private $username = 'root';
        // private $password = '';
        private $host = 'sql305.unaux.com';
        private $db_name = 'unaux_24534115_bmm';
        private $username = 'unaux_24534115';
        private $password = 'grbztqij';
        // private $host = 'sql212.ezyro.com';
        // private $db_name = 'ezyro_24534316_bmm';
        // private $username = 'ezyro_24534316';
        // private $password = 'kuz220g';
        private $conn;

        public function connect() {
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $err){
                echo 'Connection Error: ' . $err->getMessage();
            }

            return $this->conn;
        }
    }
    