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
                <img src="../../app/assets/image/logo.png" alt="" width="120px">
                <h2 class="mb-0 text-light">SKIN8</h2>
                <p class="text-light">leap ey leap tv</p>  
                <h3 class="text-white">Login Form</h3>
            </div>
            <form action="">
                <input required type="text" name="nameoremail" id="nameoremail" class="form-control shadow-none my-3 bg-transparent border text-white" placeholder="Username Or Email">
                <input required type="password" name="password" id="" class="form-control shadow-none my-3 bg-transparent border text-white" placeholder="Password">

                <button class="btn btn-primary w-100">
                    Login
                </button>
                <hr class="text-white">
                <p class="text-white text-center">
                    Don't have account?
                    <a href="./register.html">Register</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Page not found -->
    <?php include 'app/views/includes/notfound.php' ?>
    <!-- Page not found -->
</body>
</html>