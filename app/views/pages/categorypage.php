<!-- Category Section -->
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

    <!-- table-data -->
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>#</td>
                <td>Type</td>
                <td>User</td>
                <td class="text-center">Created at</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            <tr class="align-middle">
                <td>1</td>
                <td>Foam</td>
                <td>
                    Add by: <span class="text-success fw-bold">Coca</span>
                </td>
                <td class="text-center">
                    <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                        Data was created : 2025-07-31
                    </span>
                </td>
                <td class="text-center">
                        <button title="Edit Data" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#uptype">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletetype">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </td>
                
            </tr>
        </tbody>
    </table>
    <!-- table-data -->
    
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
                    
                    <input type="hidden" name="user_id" id="user_id" value="<?= $_SESSION['person']['user_id'] ?? '' ?>">

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
                <form action="">
                    
                    <label for="" class="fw-medium form-label">Type Product</label>
                    <input required class="form-control shadow-none border" type="text" name="type" id="type" placeholder="Enter Type of Product">

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
<!-- Modal Delete Category -->

<!-- Category Section -->
<script>
    $(document).ready(function(){
        $('#addCate').on('submit',function(e){

            e.preventDefault();

            let type = $('#type').val();
            let userid = $('#user_id').val();

            $.ajax({
                url:'index.php?page=categorypage',
                method:'post',
                data:{
                    func:'create',
                    userid:userid,
                    type:type
                },
                success:function(res){
                    $("#addtype").modal('hide');
                    res = res.trim();
                    if(res == "success"){
                        alert("Create Success");
                    }else{
                        alert(res);
                    }
                }
            })
            
            $('#type').val('');     
        })
    })
</script>