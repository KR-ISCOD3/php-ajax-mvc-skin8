<?php 

    class Database{
        // static function connect database
        static public function connection(){
            
            // create object for connect to database
            $conn = new mysqli('localhost','root','','php-skincare-ajax-project');

            // return value back to function connection.
            return $conn;
        }

    }
?>