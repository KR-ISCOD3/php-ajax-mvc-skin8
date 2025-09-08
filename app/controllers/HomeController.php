<?php

    require_once 'app/models/Product.php';

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

        public function getProduct(){
            $userid = $_POST['userid'];
            $productModel = new Product();

            $items = $productModel->getAll($userid);
            if(!empty($items)){
                foreach($items as $item){
                    $id = $item['id'];
                    $name = $item['name'];
                    $price = $item['price'];
                    $stock = $item['stock'];
                    $image = $item['image'];
                    // $created_at = $item['created_at'];
                    $type = $item['type'];
                    // $type_id = $item['type_id'];
                    // $username = $item['username'];

                    echo <<<HTML
                        <tr class="align-middle">
                            <td>#$id</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="object-fit-cover" src="app/assets/uploads/$image" alt="" style="width: 40px;height: 40px;">
                                    <div class="ms-1">
                                        <p class="m-0 fw-medium">$name</p>
                                        <p class="m-0 text-secondary" style="font-size: 12px;">$type</p>
                                    </div>
                                </div>
                            </td>
                            <td>x$stock</td>
                            <td>
                                <span class="text-danger fw-medium">$$price</span>
                            </td>
                            <td class="text-end">
                                <button 

                                data-id="$id"
                                data-name="$name"
                                data-price="$price"
                                
                                class="btn btn-dark fw-bolder p-1 btn-order">
                                    🛒
                                </button>
                            </td>
                        </tr>
                    HTML;
                }
            }else{
                echo <<<HTML
                        <tr class="align-middle">
                            <td colspan="8" class="text-secondary text-center">Data is empty 🤔</td>
                        </tr>
                    HTML;
            }
        }

       

        public function logout(){
            session_unset();
            session_destroy();

            echo 'Logout Success.';
        }
    }