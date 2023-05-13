<?php 
session_start();

if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require '../functions/functions.php';

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // check
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        // check
        if(mysqli_num_rows($result) === 1 ) {
             // checking 
             $row = mysqli_fetch_assoc($result);
             if(password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
             } else {
                echo "
                <script>
                    alert('password salah, coba lagi');
                </script>
                ";
             }
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
            <input type="text" id="password" name="password" placeholder="enter your Password..." class="rounded w-100 shadow-lg" style="outline: none;">
            <button id="login" name="login" class="btn btn-success">Login</button>
        </form>
        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
            <hr class="w-100">
            <span>or</span>
            <hr class="w-100">
        </div>
        <div class="d-flex justify-content-center">
            <span>tidak memiliki akun?<a href="register.php" class="text-decoration-none m-1 ">register</a></span>
        </div>
    </div>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>