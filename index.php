<?php
    // session start
    session_start(); // call session
    
    // get page when click link website
    $page = $_GET['page'] ?? 'homepage';

    $publicPage = ['login','register'];

    // return 0
    // !0 = 1
    if(!isset($_SESSION['person']) && !in_array($page,$publicPage)){
        header('Location: index.php?page=login');
        exit;
    }
        
    // call all controllers
    require_once 'app/controllers/CategoryController.php';
    require_once 'app/controllers/CustomerController.php';
    require_once 'app/controllers/DeliveryController.php';
    require_once 'app/controllers/HomeController.php';
    require_once 'app/controllers/ProductController.php';

    require_once 'app/controllers/LoginController.php';
    require_once 'app/controllers/RegisterController.php';

    // check function
    $func = $_POST['func'] ?? null;

    switch($page){

        case 'register':
            $reg = new RegisterController();
            switch($func){
                case 'regis':
                    $reg->register();
                break;
                default:
                    $reg->index();
                break;
            }
        break;

        case 'login':
            $login = new LoginController();
            switch($func){
                default:
                    $login->index();
                break;
            }
        break;

    
        // for homepage
        case 'homepage':
            $home = new HomeController();
            switch($func){
                case 'logout':
                    $home->logout();
                break;
                // default page to index function in HomeController
                default:
                    $home->index();
                break;
            }
            
        break;
        
        // for categorypage
        case 'categorypage':
            $cate = new CategoryController();
            switch($func){
                default:
                    $cate->index();
                break;
            }
        break;

        // for customerpage
        case 'customerpage':
            $cus = new CustomerController();
            switch($func){
                default:
                    $cus->index();
                break;
            }

        break;

        // for deliverypage
        case 'deliverypage':
            $deliver = new DeliveryController();
            switch($func){
                default:
                    $deliver->index();
                break;
            }
        
        break;

        // for productpage
        case 'productpage':
            $pro = new ProductController();
            switch($func){
                default:
                    $pro->index();
                break;
            }
        break;

        default:
            echo '<h1> 🌚 Page Not Found.... </h1>';
        break;
    }

?>