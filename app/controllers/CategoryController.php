<?php 

    require_once 'app/models/Category.php';

    class CategoryController{

        public function index(){
            $views = 'app/views/pages/categorypage.php';
            include 'app/views/layout.php';
        }

        public function create(){

            $userid = $_POST['userid'] ?? "";
            $type = $_POST['type'] ?? "";
            
            if(empty($userid) || empty($type)){
                echo "Form is empty please input";
            }

            $categoryModel = new Category();

            $rs = $categoryModel->create($userid,$type);
            if($rs){
                echo "success";
            }else{
                echo "Fail to Create Data";
            }
        }
    }