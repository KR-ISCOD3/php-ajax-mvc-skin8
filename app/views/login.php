<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- link css -->
    <link rel="stylesheet" href="../assets/style/style.css">
    <!-- link css -->

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- link bootstrap -->
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
    <div style="height: 100vh;" class="container d-flex justify-content-center align-items-center d-lg-none">
        <div class="text-center">
            <img src="../assets/image/gifnotfound.gif" alt="" class="rounded-4">
            <h3 class="m-0 mt-2">KO MES BRO</h3>
            <p>Berk Ler laptop tv Bro</p>
        </div>
    </div>
    <!-- Page not found -->
</body>
</html>