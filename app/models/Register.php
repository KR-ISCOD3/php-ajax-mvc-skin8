<?php 

    // call connection from config/db.php
    require_once 'config/db.php';

    class Register{
        // data member for connection 
        private $conn;
        
        // construction for calling database connection
        public function __construct()
        {
            $this->conn = Database::connection();
        }

        // function for create account user
        public function create($name,$email,$pass){
            try {
                $stmt = $this->conn->prepare('INSERT INTO `users`(`name`, `email`, `pass`) VALUES (?,?,?)');
                $stmt->bind_param("sss", $name, $email, $pass);

                $stmt->execute();
                return $this->conn->insert_id;

            } catch (mysqli_sql_exception $e) {
                // Check if duplicate entry
                if($e->getCode() == 1062){
                    return "This email is already registered.";
                } else {
                    return "Database error: " . $e->getMessage();
                }
            }

        }   

    }
?>