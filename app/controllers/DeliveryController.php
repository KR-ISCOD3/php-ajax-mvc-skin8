<?php

    require_once 'app/models/Delivery.php';

    class DeliveryController {

        // Navigate to delivery page
        public function index() {
            $views = 'app/views/pages/deliverypage.php';
            include 'app/views/layout.php';
        }

        // Create a delivery
        public function create() {
            $userid = $_POST['userid'] ?? "";
            $category = $_POST['category'] ?? "";
            $delivery_price = $_POST['delivery_price'] ?? "";

            if (empty($userid) || empty($category) || empty($delivery_price)) {
                echo "Form is empty, please input all fields";
                return;
            }

            $deliveryModel = new Delivery();
            $rs = $deliveryModel->create($userid, $category, $delivery_price);

            echo $rs ? "success" : "Fail to Create Data";
        }

        // Read all deliveries and output as HTML table rows
        public function fetcData() {
            $userid = $_POST['userid'] ?? "";

            $deliveryModel = new Delivery();
            $deliveries = $deliveryModel->read($userid);

            if (!empty($deliveries)) {
                foreach ($deliveries as $delivery) {
                    $id = $delivery['id'];
                    $category = $delivery['category'];
                    $delivery_price = $delivery['delivery_price'];
                    $created_at = $delivery['created_at'];

                    echo <<<HTML
                        <tr class="align-middle">
                            <td>$id</td>
                            <td>$category</td>
                            <td class="text-danger">$$delivery_price</td>
                            <td>
                                <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                                    Data was created : $created_at
                                </span>
                            </td>
                            <td class="text-center">
                                <button title="Edit Data" 
                                        
                                        class="btn btn-outline-dark btn-edit" 
                                        data-id="$id" data-category="$category" 
                                        data-price="$delivery_price" 
                                        
                                        data-bs-toggle="modal" 
                                        data-bs-target="#updateDeliveryModal">
                                        
                                    <i class="bi bi-pen-fill"></i>
                                </button>
                                <button 
                                        class="btn btn-outline-danger btn-delete-delivery" 
                                        data-id="$id" data-bs-toggle="modal" 
                                        data-bs-target="#deleteDeliveryModal">

                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tr>
                    HTML;
                }
            } else {
                echo <<<HTML
                    <tr>
                        <td colspan="5">
                            <p class="text-center m-0 text-secondary">No deliveries found</p>
                        </td>
                    </tr>
                HTML;
            }
        }


        // Update delivery
        public function update() {
            $id = $_POST['id'] ?? "";
            $category = $_POST['category'] ?? "";
            $delivery_price = $_POST['delivery_price'] ?? "";

            if (empty($id) || empty($category) || empty($delivery_price)) {
                echo "Form is empty, please input all fields";
                return;
            }

            $deliveryModel = new Delivery();
            $rs = $deliveryModel->update($id, $category, $delivery_price);

            echo $rs ? "success" : "Fail to Update Data";
        }

        // Delete delivery
        public function destroy() {
            $id = $_POST['id'] ?? "";

            $deliveryModel = new Delivery();
            $rs = $deliveryModel->delete($id);

            echo $rs ? "success" : "Fail to Delete Data";
        }

    }
