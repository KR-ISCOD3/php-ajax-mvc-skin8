<!-- Delivery Section -->
<input type="hidden" id="userid" value="<?= $_SESSION['person']['user_id'] ?>"> 
<section class="p-4 border-top">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2 class="m-0">Delivery Overviews</h2>
            <p>You can customize your own Delivery Price.</p>
        </div>

        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addcate">
            Add Delivery Price +
        </button>
    </div>

    <div>
        <!-- table-data -->
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>#</td>
                    <td>Category</td>
                    <td>Delivery Price</td>
                    <td>Created at</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody id="tb">
                <tr class="align-middle">
                    <td>1</td>
                    <td>City</td>
                    <td class="text-danger">$1.00</td>
                    <td>
                        <span class="bg-secondary-subtle text-secondary rounded-3 fw-medium px-1">
                            Data was created : 2025-07-31
                        </span>
                    </td>
                    <td class="text-center">
                            <button title="Edit Data" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#updatecate">
                            <i class="bi bi-pen-fill"></i>
                        </button>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletecate">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>
                    
                </tr>
            </tbody>
        </table>
        <!-- table-data -->
       
    </div>
</section>

<!-- Modal Add Delivery Price -->
<div class="modal fade" id="addcate" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delivery Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form id="addDeliveryform">
                    <div class="d-flex mb-2">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium form-label">Delivery Type*</label>
                            <input required class="form-control shadow-none border" type="text" name="category" id="category" placeholder="Enter type of delievery">
                        </div>
                        <div class="col-6">
                            <label for="" class="fw-medium form-label">Delivery Price*</label>
                            <input required class="form-control shadow-none border" type="text" name="price" id="price" placeholder="Enter you category price">
                        </div>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
    <!-- Modal Add Delivery Price -->
    
<!-- Modal Update Delivery Price -->
<div class="modal fade" id="updatecate" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delivery Modal</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">
                    <div class="d-flex mb-2">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium form-label">Delivery Type*</label>
                            <input required class="form-control shadow-none border" type="text" name="category" id="category" placeholder="Enter type of delievery">
                        </div>
                        <div class="col-6">
                            <label for="" class="fw-medium form-label">Delivery Price*</label>
                            <input required class="form-control shadow-none border" type="text" name="price" id="price" placeholder="Enter you category price">
                        </div>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Update Delivery Price -->

<!-- Modal delete Deliver Price -->
<div class="modal fade" id="deleteDeliveryModal" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Delivery</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form action="">
                    <input type="text" name="" id="del_id">
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
<!-- Modal -->

<!-- Delivery Section -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){

        function fetchData(){
            $.ajax({
                url:'index.php?page=deliverypage',
                method:"post",
                data:{
                    func:'fetchData',
                    userid: $('#userid').val(),
                },
                success:function(echo){
                    $('#tb').html(echo)
                }
            })
        }

        fetchData();


        $('#addDeliveryform').on('submit',function(e){
            e.preventDefault();
            // console.log($('#category').val(),$('#price').val(),$('#userid').val());
            $.ajax({
                url:'index.php?page=deliverypage',
                method:'post',
                data:{
                    func:"create",
                    userid:$('#userid').val(),
                    category:$('#category').val(),
                    delivery_price: $('#price').val()
                },
                success:function(res){
                    $('#addcate').modal('hide');
                    res = res.trim();
                    if(res == "success"){
                        console.log("Create Success");
                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: 1300,
                            showCloseButton: true,   // display the X button
                            showConfirmButton: false // hide the OK button
                        });
                        fetchData();
                        $('#category').val('')
                        $('#price').val('')
                    }else{
                        alert(res);
                    }
                }
            })
        })

        $(document).on('click','.btn-delete-delivery',function(e){
            // alert($(this).data('id'))
            $('#del_id').val($(this).data('id'))
        })

    }) 
</script>