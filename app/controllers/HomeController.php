<?php

    class HomeController{

        // go to homepage
        public function index(){
            $views = 'app/views/pages/homepage.php';
            include 'app/views/layout.php';
        }
        
        public function order(){

        }

        public function getCustomer(){
            
        }

        public function getProdunt(){
            
        }

        public function logout(){
            session_unset();
            session_destroy();

            echo 'Logout Success.';
        }
    }