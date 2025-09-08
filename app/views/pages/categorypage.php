<!-- Category Section -->

<input type="hidden" id="userid" value="<?= $_SESSION['person']['user_id'] ?? '' ?>">

<section class="p-4 border-top">

    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="m-0">Category Overviews</h2>
            <p>You can customize your own Category of your Product.</p>
        </div>

        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addtype">
            Add Category +
        </button>
    </div>

    <div style="height: 500px;" class="overflow-y-scroll border-bottom">
        <!-- table-data -->
        <table class="table">
            <thead class="table-dark sticky-top">
                <tr>
                    <td>#</td>
                    <td>Type</td>
                    <td>User</td>
                    <td class="text-center">Created at</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody id="tb">
            <!-- get data here from controller -->
            </tbody>
        </table>
        <!-- table-data -->
    </div>
    
</section>

<!-- Modal Add Category -->
<div class="modal fade" id="addtype" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Category Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                
                <form id="addCate">

                    <label for="" class="fw-medium form-label">Type Product</label>
                    <input required class="form-control shadow-none border" type="text" name="type" id="type" placeholder="Enter Type of Product">

                    <div class="modal-footer pb-0 mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>

                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Add Category Price -->

<!-- Modal Update Category -->
<div class="modal fade" id="uptype" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Category Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form id="updateForm">
                    
                    <input type="hidden" name="up_id" id="up_id">

                    <label for="" class="fw-medium form-label">Type Product</label>
                    <input required class="form-control shadow-none border" type="text" name="up_type" id="up_type" placeholder="Enter Type of Product">

                    <div class="modal-footer pb-0 mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Update Category Price -->

<!-- Modal Delete Category -->
<div class="modal fade" id="deletetype" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Type</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form id="delCate">
                    <input type="hidden" id="del_id" name="del_id" >
                    <h4 class="text-center">Are you sure you want to <span class="text-danger">delete</span> ?🤔</h4>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Delete Category -->

<!-- Category Section -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="app/assets/js/category.js"></script>