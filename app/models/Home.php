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

        public function order($customer_id,$userid,$cart){

            if(empty($cart)) return false;
            
            foreach($cart as $item){
                $productId =  $item['id'];
                $qty =  $item['qty'];
                $total =  $item['subTotal'];

                $stmt = $this->conn->prepare("
                            INSERT INTO orders (product_id, qty, total, customer_id, user_id)
                            VALUES (?, ?, ?, ?, ?)
                        ");
                $stmt->bind_param('iidii',$productId,$qty,$total,$customer_id,$userid);
                $stmt->execute();
            }
            $stmt->close();
            return true;
        }

        public function createCustomer($tel,$location,$delivery_id){
            $stmt = $this->conn->prepare("INSERT INTO customers (tel, location, delivery_id) VALUES (?, ?, ?)");
            $stmt->bind_param('ssi',$tel,$location,$delivery_id);

            if($stmt->execute()){
                return $this->conn->insert_id;
            }else{
                return false;
            }   
        }
    }
?>

