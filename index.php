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
                case 'loginUser':
                    $login->login();
                break;
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
                
                case 'getProduct';
                    $home->getProduct();
                break;

                case 'getDelivery':
                    $home->getDeliveryPrice();
                break;

                case 'order':
                    $home->order();
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
                // call function create from controller
                case 'create':
                    $cate->create();
                break;

                case 'read':
                    $cate->fetcData();
                break;
                
                case 'update':
                    $cate->update();
                break;
                
                case 'delete':
                    $cate->destroy();
                break;

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
                case 'create':
                    $deliver->create();
                break;

                case 'fetchData':
                    $deliver->fetcData();
                break;

                case 'update':
                    $deliver->update();
                break;

                case 'delete':
                    $deliver->destroy();
                break;  

                default:
                    $deliver->index();
                break;
            }
        
        break;

        // for productpage
        case 'productpage':
            $pro = new ProductController();
            switch($func){
                case 'create':
                    $pro->create();
                break;
                // call function getCateOptions in Productcontroller
                case 'getType':
                    $pro->getCateOptions();
                break;

                case 'getData':
                    $pro->getAllData();
                break;

                case 'delete':
                    $pro->delete();
                break;   
                
                case 'update';
                    $pro->update();
                break;

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