<?php 

    require_once 'config/db.php';

    class Delivery {

        private $conn;

        public function __construct(){
            $this->conn = Database::connection();
        }

        // CREATE
        public function create($userid, $category, $delivery_price){
            try{
                $stmt = $this->conn->prepare(
                    "INSERT INTO `deliveries`(`user_id`, `category`, `delivery_price`) VALUES (?,?,?)"
                );
                $stmt->bind_param("isd", $userid, $category, $delivery_price); // i=int, s=string, d=decimal/float
                return $stmt->execute();

            }catch(mysqli_sql_exception $err){
                echo "Database: ".$err->getMessage();
                return false;
            }
        }

        // READ
        public function read($userid){
            $data = [];
            try{
                $stmt = $this->conn->prepare("
                    SELECT 
                        d.id AS delivery_id,
                        d.category,
                        d.delivery_price,
                        d.created_at,
                        u.name AS user_name
                    FROM deliveries d
                    LEFT JOIN users u ON d.user_id = u.id
                    WHERE d.user_id = ?
                    ORDER BY d.id DESC
                ");
                $stmt->bind_param("i", $userid);
                $stmt->execute();

                $result = $stmt->get_result();

                while($row = $result->fetch_assoc()){
                    $data[] = [
                        'id' => $row['delivery_id'],
                        'category' => $row['category'],
                        'delivery_price' => $row['delivery_price'],
                        'created_at' => $row['created_at'],
                        'username' => $row['user_name']
                    ];
                }

                return $data;

            }catch(mysqli_sql_exception $e){
                echo 'Database: '.$e->getMessage();
                return [];
            }
        }

        // UPDATE
        public function update($id, $category, $delivery_price){
            try{
                $stmt = $this->conn->prepare("UPDATE deliveries SET category = ?, delivery_price = ? WHERE id = ?");
                $stmt->bind_param("sdi", $category, $delivery_price, $id);
                return $stmt->execute();

            }catch(mysqli_sql_exception $e){
                echo 'Database: '.$e->getMessage();
                return false;
            }
        }

        // DELETE
        public function delete($id){
            try{
                $stmt = $this->conn->prepare("DELETE FROM deliveries WHERE id = ?");
                $stmt->bind_param("i", $id);
                return $stmt->execute();

            }catch(mysqli_sql_exception $e){
                echo 'Database: '.$e->getMessage();
                return false;
            }
        }

    }
?>
