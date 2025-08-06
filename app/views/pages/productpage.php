<!-- Product Section -->
<section class="p-4 border-top">

    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="m-0">Product Overviews</h2>
            <p>You can create your own product for you business.</p>
        </div>

        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addpro">
            Add Product +
        </button>
    </div>

    <div>

        <!-- table-data -->
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>#</td>
                    <td>Image/Name</td> 
                    <td>Price</td>
                    <td>Stock</td>
                    <td>Type</td>
                    <td>User</td>
                    <td>Created at</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="" alt="" width="50px" height="50px" class="bg-danger">
                            <p class="m-0 ms-2 fw-medium">Item name</p>
                        </div>
                    </td>
                    <td class="text-danger">$4.00</td>
                    <td class="text-primary">60</td>
                    <td>Foam</td>
                    <td class="text-success fw-bold">Tea K'pa</td> 
                    <td>
                        <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                            Data was created : 2025-07-31
                        </span>
                    </td>
                    <td class="text-center">
                            <button title="Edit Data" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#uppro">
                            <i class="bi bi-pen-fill"></i>
                        </button>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletepro">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>

                </tr>
                <!-- <tr >
                    <td colspan="8" class="text-center">
                        <span class="text-secondary">No item yet...</span>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <!-- table-data -->
         
    </div>
</section>

<!-- Modal Add Product -->
<div class="modal fade" id="addpro" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Product Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">                
                    <div>
                        <div class="w-100 bg-secondary-subtle rounded-2 overflow-hidden" style="height: 230px;">
                            <img id="preview" src="../../app/assets/image/placeholder.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <input required type="file" name="image" id="image" class="form-control shadow-none border">
                    </div>

                    <div class="d-flex mt-4">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Type*</label>
                            <input required type="text" name="proname" id="proname" class="form-control shadow-none border" placeholder="Product Name">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Name*</label>
                            <select name="protype" id="protype" class="form-select shadow-none border">
                                <option value="" disabled selected>Select Type</option>
                                <option value="">Foam</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex mt-3">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Stock*</label>
                            <input required type="number" min="0" name="prostock" id="prostock" class="form-control shadow-none border" placeholder="Product Stock">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Price*</label>
                            <input required type="text" name="proprice" id="proprice" class="form-control shadow-none border" placeholder="Product Price">
                        </div>
                    </div>    

                    <div class="modal-footer pb-0 mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Add Product -->

<!-- Modal Update Product -->
<div class="modal fade" id="uppro" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Product Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">                
                    <div>
                        <div class="w-100 bg-secondary-subtle rounded-2 overflow-hidden" style="height: 230px;">
                            <img id="preview" src="../../app/assets/image/placeholder.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <input required type="file" name="image" id="image" class="form-control shadow-none border">
                    </div>

                    <div class="d-flex mt-4">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Type*</label>
                            <input required type="text" name="proname" id="proname" class="form-control shadow-none border" placeholder="Product Name">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Name*</label>
                            <select name="protype" id="protype" class="form-select shadow-none border">
                                <option value="" disabled selected>Select Type</option>
                                <option value="">Foam</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex mt-3">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Stock*</label>
                            <input required type="number" min="0" name="prostock" id="prostock" class="form-control shadow-none border" placeholder="Product Stock">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Price*</label>
                            <input required type="text" name="proprice" id="proprice" class="form-control shadow-none border" placeholder="Product Price">
                        </div>
                    </div>    

                    <div class="modal-footer pb-0 mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Update Product -->


<!-- Modal Delete produc -->
<div class="modal fade" id="deletepro" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Product</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">
                    <h4 class="text-center">Are you sure you want to <span class="text-danger">delete</span> ?🤔</h4>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Delete produc -->

<!-- Product Section -->