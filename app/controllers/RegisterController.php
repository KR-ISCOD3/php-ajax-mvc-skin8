<?php 

    require_once 'app/models/Register.php';

    // create class regsterController
    class RegisterController{

        // function index for navigate to register form
        public function index(){
            include 'app/views/register.php';
        }

        // function register account
        public function register(){
            
            // start start
            session_start();

            // get value from frontend form by method post
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $pass = $_POST['pass'] ?? '';

            // check if empty
            if(empty($name) || empty($email) || empty($pass)){
                echo json_encode([
                    'success'=>false,
                    'message'=>"Please fill all the fields."
                ]);
            }

            // create object for calling function in model
            $registermodel = new Register();

             // calling function create in model
            $rs = $registermodel->create($name,$email,$pass);

            // check if success send name and email back
            if($rs){
                $_SESSION['person'] = [
                    'username' => $name,
                    'email' => $email,
                ];
                echo json_encode(["success"=>true]);
            }
            // if not message error
            else{
                echo json_encode(["success"=>false]); 
            }
            
        }
    }
?>