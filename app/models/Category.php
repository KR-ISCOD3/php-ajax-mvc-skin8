<?php 

    require_once 'config/db.php';
    
    class Category{

        private $conn;

        public function __construct()
        {
            $this->conn = Database::connection();
        }

        public function create($userid,$type){
            try{

                // query for prepare to insert data
                $stmt = $this->conn->prepare('INSERT INTO `types`(`user_id`, `type`) VALUES (?,?)');
                // bind paramet to query
                $stmt->bind_param("is",$userid,$type);
                
                // execute query if success return true if fail fail
                $rs = $stmt->execute();

                if($rs){
                    return true;
                }else{
                    return false;
                }

            }catch(mysqli_sql_exception $err){
                echo "Database: ".$err->getMessage();
            }
        }

        public function read(){
            
        }

        public function update(){
            
        }

        public function delete(){
            
        }

    }

?>