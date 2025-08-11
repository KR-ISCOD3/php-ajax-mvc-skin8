<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'app/views/includes/head.php' ?>
</head>
<style>
   input::placeholder{color: rgb(171, 169, 169) !important;}
</style>
<body class="font-quicksand">

    <div class="container-fluid bg-dark d-none d-lg-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="col-4 rounded-3 shadow-lg px-5 py-3">
            <div class="text-center">
                <img src="app/assets/image/logo.png" alt="" width="120px">
                <h2 class="mb-0 text-light">SKIN8</h2>
                <p class="text-light">leap ey leap tv</p>  
                <h3 class="text-white">Register Form</h3>
            </div>
            <form id="registerForm">
                
                <input required type="text" name="name" id="name" class="form-control shadow-none my-3 bg-transparent border text-white" placeholder="Username">
                <input required type="email" name="email" id="email" class="form-control shadow-none my-3 bg-transparent border text-white" placeholder="Email">
                <input required type="password" name="password" id="password" class="form-control shadow-none my-3 bg-transparent border text-white" placeholder="Password">

                <button class="btn btn-primary w-100">
                    Register
                </button>
                <hr class="text-white">
                <p class="text-white text-center">
                    Already have account?
                    <a href="index.php?page=login">Login</a>
                </p>
            </form>
        </div>
    </div>

   
    <!-- Page not found -->
    <?php include 'app/views/includes/notfound.php' ?>
    <!-- Page not found -->
</body>
<script>
    $(document).ready(function(){

        $('#registerForm').on('submit',function(e){

            e.preventDefault(); // prevent page reload

            let name =  $('#name').val();
            let email =  $('#email').val();
            let pass =  $('#password').val();

            console.log(name,email,pass);

            $.ajax({
                url:'',
                method:'',
                data:{},
                dataType:'',
                success: function(res){
                    // message success
                },
                error: function(){
                    // message error
                }
            })

            $('#name').val('');
            $('#email').val('');
            $('#password').val('');           
        })
    })
</script>
</html>