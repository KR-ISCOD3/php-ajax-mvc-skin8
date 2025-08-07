<?php 

    class CustomerController{

        // navigate to customerpage
        public function index(){
            $views = 'app/views/pages/customerpage.php';
            include 'app/views/layout.php';
        }
        
    }