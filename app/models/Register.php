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
            // preparing query for insert in to database
            $stmt = $this->conn->prepare('INSERT INTO `users`(`name`, `email`, `pass`) VALUES (?,?,?)');
            $stmt->bind_param("sss",$name,$email,$pass);
            $rs = $stmt->execute();

            // return back if success or error
            return $rs;
        }   

    }
?>