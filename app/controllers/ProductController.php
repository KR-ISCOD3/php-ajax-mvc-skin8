<?php 

    require_once 'app/models/Category.php';
    require_once 'app/models/Product.php';

    class ProductController{

        public function index(){
            $views = 'app/views/pages/productpage.php';
            include 'app/views/layout.php';
        }

        public function getCateOptions(){

            $userid = $_POST['userid'] ?? "";
            $categoryModel = new Category();
            $category = $categoryModel->read($userid);
            $count = 0;
            // if no category in database go to else
            if(!empty($category)){
                foreach($category as $cate){
                    $count++;
                    $id = $cate['id'];
                    $type = $cate['type'];

                    echo <<<HTML
                        
                       <option value="$id">$type</option>

                    HTML;
                }
            }else{
                echo <<<HTML
                    <option value="No Options" disable seleted>No Options</option>
                HTML;
            }
        }

        public function create(){

            $userid = $_POST['userid'];
            $name = $_POST['proname'];
            $stock = $_POST['prostock'];
            $price = $_POST['proprice'];
            $type_id = $_POST['protype'];

            // image 
            $image = $_FILES['image']['name']; // name image
            $tmp_name = $_FILES['image']['tmp_name']; // temporary file path

            // generate new name
            $newFileName = time().'_'.$image;

            move_uploaded_file($tmp_name,'app/assets/uploads/'.$newFileName);
            
            $proModel = new Product();

            $user_id = intval($userid);
            $pro_stock = intval($stock);
            $pro_price = floatval($price);
            $typeid = intval($type_id);

            $result = $proModel->insert($name,$pro_price,$pro_stock,$newFileName,$typeid,$user_id);

            if($result){
                echo 'success';
            }else{
                echo false;
            }
            
            // echo 'Controller Get Data doj jea'.$userid."-".$name."-".$stock."-".$price."-".$type_id."-".$image;
        }

        public function getAllData(){
            $userid = $_POST['userid'];
            $productModel = new Product();

            $items = $productModel->getAll($userid);
            $count = 0;
            if(!empty($items)){
                foreach( $items as $item){
                    $count++;
                    $id = $item['id'];
                    $name = $item['name'];
                    $price = $item['price'];
                    $stock = $item['stock'];
                    $image = $item['image'];
                    $created_at = $item['created_at'];
                    $type = $item['type'];
                    $type_id = $item['type_id'];
                    $username = $item['username'];
                    
                    echo <<<HTML
                        <tr class="align-middle">
                            <td>$count</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="app/assets/uploads/$image" alt="" width="50px" height="50px" class="bg-secondary object-fit-cover  product-img">
                                    <p class="m-0 ms-2 fw-medium">$name</p>
                                </div>
                            </td>
                            <td class="text-danger">$$price</td>
                            <td class="text-primary">$stock</td>
                            <td>$type</td>
                            <td class="text-success fw-bold">$username</td> 
                            <td>
                                <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                                    Data was created : $created_at
                                </span>
                            </td>
                            <td class="text-center">
                                <button title="Edit Data" 

                                        data-id="$id"
                                        data-name="$name"
                                        data-image="$image"
                                        data-price="$price"
                                        data-stock="$stock"
                                        data-type_id = "$type_id"

                                        class="btn-update btn btn-outline-dark" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#uppro"
                                >
                                    <i class="bi bi-pen-fill"></i>
                                </button>
                                <button data-id="$id" data-image="$image" class="btn-del btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletepro">
                                    <i class="bi bi-trash3-fill"></i>
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

        public function delete(){
            $itemid = $_POST['itemid'];
            $imagename = $_POST['imagename'];

            $imagePath = 'app/assets/uploads/'. $imagename;

            if(file_exists($imagePath)){
                unlink($imagePath);
            }

            $proModel = new Product();

            $id = intval($itemid);
            $result = $proModel->delete($id);

            if($result){
                echo 'success';
            }else{
                echo false;
            }
        }

        public function update(){

            $upid = $_POST['upid'];
            $upname = $_POST['upname'];
            $upprice = $_POST['upprice'];
            $upstock = $_POST['upstock'];
            $uptype_id = $_POST['uptype'];

            $oldimage = $_POST['oldimage'];
            $upimage = $_FILES['upimage']['name'];
            
            if(empty($upimage)){

                $image = $oldimage;

                $proModel = new Product();
                $rs = $proModel->update($upid,$upname,$upprice,$upstock,$image,$uptype_id);

            }else{
                // new image
                // delete old image first if have new image
                $oldimagePath = 'app/assets/uploads/'. $oldimage;
                if(file_exists($oldimagePath)){
                    unlink($oldimagePath);             
                }

                // after that move new image to folder
                $tmp_name = $_FILES['upimage']['tmp_name']; // temporary file path
                // generate new name
                $newImageName = time().'_'.$upimage;
                move_uploaded_file($tmp_name,'app/assets/uploads/'.$newImageName);

                $proModel = new Product();
                $rs = $proModel->update($upid,$upname,$upprice,$upstock,$newImageName,$uptype_id);
                
            }

            if($rs){
                echo 'success';
            }else{
                echo 'Fail to update';
            }

        }

    }