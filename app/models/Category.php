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

        public function read($userid){
            $data = [];
            try{

                $stmt = $this->conn->prepare('
                        SELECT 
                            t.id AS type_id,
                            t.type,
                            t.created_at,
                            u.name AS user_name
                        FROM types t
                        LEFT JOIN users u ON t.user_id = u.id
                        WHERE t.user_id = ?
                        ORDER BY t.id DESC;
                    ');
                
                $stmt->bind_param("i",$userid);
                $stmt->execute();

                // Get result
                $result = $stmt->get_result(); // col


                while($row = $result->fetch_assoc()){
                    $data[] = [
                        'id' => $row['type_id'],
                        'type'=> $row['type'],
                        'created_at'=> $row['created_at'],
                        'username'=> $row['user_name'],
                    ];
                }

                return $data;

            }catch(mysqli_sql_exception $e){
                echo 'Database: '.$e;
            }
            
        }

        public function update(){
            
        }

        public function delete(){
            
        }

    }

?>