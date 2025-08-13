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
            // session_start();

            // get value from frontend form by method post
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $pass = $_POST['pass'] ?? '';

            // check if empty
            if(empty($name) || empty($email) || empty($pass)){
                echo 'Please fill all the fields.';
            }

            // hash password
            $hashPass = password_hash($pass,PASSWORD_DEFAULT);

            // create object for calling function in model
            $registermodel = new Register();

             // calling function create in model
            $id = $registermodel->create($name,$email,$hashPass);

            // check if success send name and email back
            if($id){
                $_SESSION['person'] = [
                    'user_id' => $id,
                    'username' => $name,
                    'email' => $email,
                ];
                echo 'success';
                exit;
            }
            // if not message error
            else{
                echo 'Create account fail'; 
            }
            
        }
    }
?>