<?php 

    require_once 'app/models/Login.php';

    class LoginController{
        
        public function index(){
            include 'app/views/login.php';
        }

        public function login(){
            $nameoremail = $_POST['nameoremail'] ?? '';
            $pass = $_POST['password'] ?? '';

            $loginModel = new Login();
            $user = $loginModel->login($nameoremail,$pass);

            if($user){

                 $_SESSION['person'] = [
                    'user_id' => $user['id'],
                    'username' => $user['name'],
                    'email' => $user['email'],
                ];

                echo 'success';
            }else{
                echo 'Maybe khos password, name or email';
            }
            exit;
        }
    }