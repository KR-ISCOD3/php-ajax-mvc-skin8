<!-- Side bar -->
<aside class="col-2 bg-dark sticky-top p-4 text-center " style="height: 100vh;">

    <!-- logo -->
    <div class="w-100 py-3 text-light">
        <img src="app/assets/image/logo.png" alt="" class="w-25 mb-2">
        <h2 class="mb-0">SKIN8</h2>
        <p>leap ey leap tv</p>
    </div>
    <!-- logo -->

    <!-- menu -->
    <ul class="list-unstyled">
        
        <a href="index.php?page=homepage" class="btn btn-outline-secondary text-light w-100 my-1">             
            <li class="d-flex justify-content-start fs-6 py-1 ">
                <i class="bi bi-house-door-fill me-3"></i>
                Home
            </li> 
        </a>
        <a href="index.php?page=customerpage" class="btn btn-outline-secondary text-light w-100 my-1">             
            <li class="d-flex justify-content-start fs-6 py-1 ">
                <i class="bi bi-people-fill me-3"></i>
                Customers
            </li> 
        </a>
        <a href="index.php?page=categorypage" class="btn btn-outline-secondary text-light w-100 my-1">             
            <li class="d-flex justify-content-start fs-6 py-1">
                <i class="bi bi-hash me-3"></i>
                Category
            </li> 
        </a>
        <a href="index.php?page=deliverypage" class="btn btn-outline-secondary text-light w-100 my-1">             
            <li class="d-flex justify-content-start fs-6 py-1">
                <i class="bi bi-tag-fill me-3"></i>
                Delivery Price
            </li> 
        </a>      
        <a href="index.php?page=productpage" class="btn btn-outline-secondary text-light w-100  my-1">             
            <li class="d-flex justify-content-start fs-6 py-1">
                <i class="bi bi-bag-fill me-3"></i>
                Product
            </li> 
        </a>
    </ul>
    <!-- menu -->

    <!-- btn-logout -->
    <div class="position-absolute bottom-0 w-100 start-0 p-3">
        <button data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-danger w-100 fw-medium">
            <i class="bi bi-box-arrow-left"></i>
            Logout
        </button>
    </div>
    <!-- btn-logout -->
</aside>

<div class="modal fade" id="logoutmodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Logout form</h3>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form  id="formLogout">
                    <h4 class="text-center">Are you sure you want to logout? 🤔</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                        <button data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-danger">
                            Yes
                        </button>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#formLogout').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url: 'index.php?page=homepage',
                method: 'POST',
                data:{
                    func:'logout'
                },
                success: function(response){
                    if(response){
                        window.location.href = 'index.php'
                    }
                }
            })
        })
    })
</script>