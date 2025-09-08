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
            <tbody id="tabledata">
                <!-- <tr class="align-middle">
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

                </tr> -->
                <!-- <tr >
                    <td colspan="8" class="text-center">
                        <span class="text-secondary">No item yet...</span>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <!-- table-data -->
         
    </div>

    <div id="imageOverlay" class="d-none position-absolute w-100 top-0 start-0 text-center py-5" style="height: 100vh;background-color: rgba(0, 0, 0, 0.213); z-index: 1999;">
        <img id="overlayImg" src="" alt="" class=" h-100 bg-danger object-fit-cover border " style="width: 800px;">
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

                <form id="formAdd">       
                    <input type="hidden" name="userid" id="userid" value="<?= $_SESSION['person']['user_id'] ?>">          
                    <div>
                        <div class="w-100 bg-secondary-subtle rounded-2 overflow-hidden" style="height: 230px;">
                            <img id="preview" src="app/assets/image/placeholder.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <input required type="file" name="image" id="image" class="form-control shadow-none border">
                    </div>

                    <div class="d-flex mt-4">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Name*</label>
                            <input required type="text" name="proname" id="proname" class="form-control shadow-none border" placeholder="Product Name">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Type*</label>
                            <select name="protype" id="protype" class="form-select shadow-none border">
                                <option value="" disabled selected>Select Type</option>
                                <!-- <option value="">Foam</option> -->
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
                <form id="formUp">    
                    
                    <input type="hidden" name="upid" id="upid">
                    <div>
                        <div class="w-100 bg-secondary-subtle rounded-2 overflow-hidden" style="height: 230px;">
                            <img id="uppreview" src="app/assets/image/placeholder.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <input type="hidden" name="oldimage" id="oldimage">
                        <input alt="" type="file" name="upimage" id="upimage" class="form-control shadow-none border">
                    </div>

                    <div class="d-flex mt-4">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Name*</label>
                            <input required type="text" name="upname" id="upname" class="form-control shadow-none border" placeholder="Product Name">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Type*</label>
                            <select name="uptype" id="uptype" class="form-select shadow-none border">
                                <option value="" disabled selected>Select Type</option>
                                <!-- <option value="">Foam</option> -->
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex mt-3">
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Stock*</label>
                            <input required type="number" min="0" name="upstock" id="upstock" class="form-control shadow-none border" placeholder="Product Stock">
                        </div>
                        <div class="col-6 pe-2">
                            <label for="" class="fw-medium">Product Price*</label>
                            <input required type="text" name="upprice" id="upprice" class="form-control shadow-none border" placeholder="Product Price">
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


<!-- Modal Delete product -->
<div class="modal fade" id="deletepro" data-bs-backdrop="static">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Product</h1>
                <button type="button" class="btn-close shadow-none border" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4">
                <form id="formdel">
                    <h4 class="text-center">Are you sure you want to <span class="text-danger">delete</span> ?🤔</h4>

                    <input type="hidden" name="itemiddel" id="itemiddel">
                    <input type="hidden" name="imagename" id="imagename">

                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Delete produc -->

<!-- Product Section -->

<input type="hidden" id="userid" value="<?= $_SESSION['person']['user_id'] ?>"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(e){

        $(document).on("click",'.product-img', function(){
            let imgSrc = $(this).attr("src");
            $("#overlayImg").attr("src", imgSrc);
            $("#imageOverlay").removeClass("d-none");
        });

        $("#imageOverlay").on("click", function(e){
            if(e.target.id === "imageOverlay"){
                $(this).addClass("d-none");
            }
        });

        function fetchData(){
           
            
            $.ajax({
                url:'index.php?page=productpage',
                method:'post',
                data:{
                    func:'getData',
                    userid: $('#userid').val()
                },
                success:function(echo){

                    $('#tabledata').html(echo)
                }
            })
        }

        fetchData();

        // fetch category
        const getCategory = () =>{      
            $.ajax({
                url:"index.php?page=productpage",
                method:'post',
                data:{
                    func:'getType',
                    userid:$('#userid').val()
                },
                success:function(echo){
                    $('#protype').html(echo)
                    $('#uptype').html(echo)
                }
            })
        }

        getCategory();

        $('#formAdd').on('submit',function(e){

            e.preventDefault()
            let formData = new FormData(this)
            formData.append('func','create');

            // console.log(formData);
                    
            // for (let [name, value] of formData.entries()) {
            //     console.log(name, value);
            // }

            $.ajax({
                url:"index.php?page=productpage",
                method:'post',
                data:formData,
                contentType:false,
                processData:false,
                success:function(echo){
                    console.log(echo)
                    
                    echo = echo.trim();

                    if(echo == 'success'){

                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: 1300,
                            showCloseButton: true,   // display the X button
                            showConfirmButton: false // hide the OK button
                        });

                        fetchData();
                        $('#addpro').modal('hide');
                        $('#formAdd')[0].reset();
                        $('#preview').attr('src', 'app/assets/image/placeholder.png');

                    }
                }
            })
            
        })


        $(document).on('click','.btn-del',function(){
            // alert($(this).data('id'))
            // alert($(this).data('image'))

            $('#itemiddel').val($(this).data('id'))
            $('#imagename').val($(this).data('image'))
        })


        $('#formdel').on('submit',function(e){

            e.preventDefault()
            let itemid = $('#itemiddel').val();
            let imagename = $('#imagename').val();

            // alert(itemid)
            // alert(imagename)
            // console.log(formData);
                    
        
            $.ajax({
                url:"index.php?page=productpage",
                method:'post',
                data:{
                    func:'delete',
                    itemid:itemid,
                    imagename:imagename
                },
                success:function(echo){
                    console.log(echo)

                    echo = echo.trim();

                    if(echo == 'success'){

                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: 1300,
                            showCloseButton: true,   // display the X button
                            showConfirmButton: false // hide the OK button
                        });

                        fetchData();
                        $('#deletepro').modal('hide');
                        

                    }
                }   
            })
            
        })


        $(document).on('click','.btn-update',function(){

            // console.log(
            //     $(this).data('id'),
            //     $(this).data('name'),
            //     $(this).data('price'),
            //     $(this).data('stock'),
            //     $(this).data('image'),
            //     $(this).data('type_id'),
            // );
            
            $('#upid').val($(this).data('id'))
            $('#upname').val($(this).data('name'))
            $('#upprice').val($(this).data('price'))
            $('#upstock').val($(this).data('stock'))
            $('#uptype').val($(this).data('type_id'))
            
            $('#oldimage').val($(this).data('image'))
            $('#uppreview').attr('src','app/assets/uploads/'+$(this).data('image'));
            
        })


        $('#upimage').on('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#uppreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#formUp').on('submit',function(e){
            e.preventDefault();

            let formData = new FormData(this)
            formData.append('func','update');

            // console.log(formData);
                    
            // for (let [name, value] of formData.entries()) {
            //     console.log(name, value);
            // }

            $.ajax({
                url:"index.php?page=productpage",
                method:'post',
                data:formData,
                contentType:false,
                processData:false,
                success:function(echo){
                    echo = echo.trim();

                    if(echo == 'success'){
                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: 1300,
                            showCloseButton: true,   // display the X button
                            showConfirmButton: false // hide the OK button
                        });

                        fetchData();
                        $('#uppro').modal('hide');
                        $('#formAdd')[0].reset();
                        // $('#preview').attr('src', 'app/assets/image/placeholder.png');
                    }
                }
            })
        })
        
    })
</script>