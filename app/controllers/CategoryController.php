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

        public function fetcData(){

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
                    $created_at = $cate['created_at'];
                    $username = $cate['username'];

                    echo <<<HTML
                           
                        <tr class="align-middle">
                            <td>$id</td>
                            <td>$type</td>
                            <td>
                                Add by: <span class="text-success fw-bold">$username</span>
                            </td>
                            <td class="text-center">
                                <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                                    Data was created : $created_at
                                </span>
                            </td>
                            <td class="text-center">
                                    <button 
                                        title="Edit Data" 

                                        class="btn btn-outline-dark btn-edit" 

                                        data-id="$id"
                                        data-type="$type"

                                        data-bs-toggle="modal" 
                                        data-bs-target="#uptype"
                                    >
                                    <i class="bi bi-pen-fill"></i>
                                </button>
                                <button data-id="$id" class="btn-delete btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletetype">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                            
                        </tr>

                    HTML;
                }
            }else{

            }
        }

        public function destroy(){
            $id = $_POST['id'] ?? "";

            // echo "Controller can get id: ".$id;      
            $categoryModel = new Category();

            $rs = $categoryModel->delete($id);
            if($rs){
                echo "success";
            }else{
                echo "Fail to Create Data";
            }
        }
    }