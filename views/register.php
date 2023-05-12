<?php 
session_start();

if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require '../functions/functions.php';

if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "
        <script>
            var result = confirm('Registrasi berhasil, silahkan login');
            if (result) {
            window.location.href = 'login.php';
            }
        </script>
        ";;
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form-Irwan Blog</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('../assets/bg.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input {
            height: 35px;
        }
    </style>
</head>
<body class="container">
    <div class="container card bg-white shadow-lg" style="width: 400px; height: 400px;">
        <div class="display-5 fw-bold text-center pt-3 border-bottom">
            LOGIN AREA
        </div>
        <form action="" method="post" class="container p-3 d-flex flex-nowrap justify-content-center flex-column gap-3">
            <input type="text" id="username" name="username" placeholder="enter your Username..." class="rounded w-100 shadow-lg" style="outline: none;">
            <input type="password" id="password" name="password" placeholder="enter your Password..." class="rounded w-100 shadow-lg" style="outline: none;">
            <input type="password" id="confirm" name="confirm" placeholder="enter your Confirm Password..." class="rounded w-100 shadow-lg" style="outline: none;">
            <button id="register" name="register" class="btn btn-primary">Register</button>
        </form>
        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
            <hr class="w-100">
            <span>or</span>
            <hr class="w-100">
        </div>
        <div class="d-flex justify-content-center">
            <span>sudah punya akun?<a href="login.php" class="text-decoration-none m-1 ">register</a></span>
        </div>
    </div>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>