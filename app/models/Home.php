<?php 

    // call connection from config/db.php
    require_once 'config/db.php';

    class Home{
        // data member for connection 
        private $conn;
        
        // construction for calling database connection
        public function __construct()
        {
            $this->conn = Database::connection();
        }

        // public function order($userid,$cart){
        //     if(empty($cart)) return false;

            
        //     foreach($cart as $item){
        //         $productId =  $item['id'];
        //         $qty =  $item['qtu'];
        //         $productId =  $item['id'];
        //     }
        // }

    }
?>

