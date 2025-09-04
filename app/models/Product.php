<?php 
    require_once 'config/db.php';
    class Product{
        private $conn;

        public function __construct(){
            $this->conn = Database::connection();
        }

        public function insert($name,$price,$stock,$image,$type_id,$user_id){
            try{

                $stmt = $this->conn->prepare('INSERT INTO `products`( `name`, `price`, `stock`, `image`, `type_id`, `user_id`) VALUES (?,?,?,?,?,?)');
                $stmt->bind_param("sdisii",$name,$price,$stock,$image,$type_id,$user_id);
                $rs = $stmt->execute();

                return $rs;

            }catch(mysqli_sql_exception $e){
                echo "Message: ".$e->getMessage();
            }
        }

        public function getAll(){
            $data = [];

            try{
                
                $sql = "SELECT 
                            p.id,
                            p.name,
                            p.price,
                            p.stock,
                            p.image,
                            p.created_at,
                            p.type_id, 
                            t.type,
                            u.name AS username
                        FROM products p
                        LEFT JOIN types t ON p.type_id = t.id
                        LEFT JOIN users u ON p.user_id = u.id;";

                $rs = $this->conn->query($sql);

                if($rs->num_rows > 0){
                    // associative array
                    while($row = $rs->fetch_assoc()){
                        $data[] = $row; // add each row to array
                    }
                }

            }catch(mysqli_sql_exception $e){
                echo "Message: ".$e->getMessage();
            }

            return $data;
        }

        public function delete($id){
            try{

                $stmt = $this->conn->prepare('DELETE FROM `products` WHERE id=?');
                $stmt->bind_param('i',$id);
                $rs = $stmt->execute();
                return $rs;
            }catch(mysqli_sql_exception $e){
                echo 'Database Erro: '.$e->getMessage();
            }
        }

        public function update($id, $name, $price, $stock, $image, $type_id){
            try {
                $stmt = $this->conn->prepare('
                    UPDATE `products` 
                    SET `name` = ?, `price` = ?, `stock` = ?, `image` = ?, `type_id` = ?
                    WHERE `id` = ?
                ');

                // s = string, d = double/float, i = integer
                $stmt->bind_param("sdisii", $name, $price, $stock, $image, $type_id, $id);

                $rs = $stmt->execute();
                return $rs;

            } catch (mysqli_sql_exception $e) {
                echo "Message: " . $e->getMessage();
            }
        }

    }

?>