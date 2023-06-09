<?php 
session_start();

require '../functions/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: #efefef;">
    <!-- Navbar -->
    <div class="bg-dark d-flex align-items-center justify-content-between" style="width: 100%; height: 45px;">
        <div class="d-none d-sm-flex flex-row text-white p-3 fw-bold" style="gap: 4px; font-size: 20px;">
            <div>Ahmad</div>
            <div class="text-danger">Irwan</div>
        </div>        
        <ul class="d-flex flex-wrap pt-3 px-3 justify-content-center list-unstyled" style="gap: 20px;">
            <li><a class="text-white text-decoration-none" href="index.php"><span class="d-none d-sm-inline">Home</span><i class="d-inline d-sm-none fas fa-home"></i></a></li>
            <li><a class="text-white text-decoration-none" href="about.php"><span class="d-none d-sm-inline">About</span><i class="d-inline d-sm-none fas fa-info-circle"></i></a></li>
            <li><a class="text-white text-decoration-none" href="gallery.php"><span class="d-none d-sm-inline">Gallery</span><i class="d-inline d-sm-none fas fa-images"></i></a></li>
            <li><a class="text-white text-decoration-none" href="contact.php"><span class="d-none d-sm-inline">Contact</span><i class="d-inline d-sm-none fas fa-envelope"></i></a></li>
            <li><a class="btn btn-danger py-0" style="height: max-content;" href="logout.php"><span class="d-none d-sm-inline">Logout</span><i class="d-inline d-sm-none fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>
    <!-- ------ -->
    <!-- Content -->
        <!-- Header -->
        <div class="d-flex justify-content-center my-5 ">
            <div>
                <div class="fw-bold d-flex flex-column display-5">
                    Ahmad Irwan <br> <span class="text-center">Blog</span>
                </div>
            </div>
        </div>
        <!-- ------ -->
        <!-- Card -->
        <div class="container-sm">
            <div class="card p-3" style="border: 4px solid gray;">
                <!-- Header Card -->
                <div class="fw-bold" style="border-bottom: 1px solid #222; width: 100%;">
                    Kamu lagi di menu home nih...
                </div>
                <!-- ----------- -->
                <!-- Content -->
                <div class="mt-2 text-muted">
                    Kepoin lebih lanjut yuk 👇👇
                </div>
                <!-- ------- -->
                <!-- Content Menu -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="d-flex flex-column flex-sm-row pt-3 list-unstyled" style="gap: 20px;">
                                <li><a class="btn btn-primary w-100 w-sm-25" href="about.php">About</a></li>
                                <li><a class="btn btn-success w-100 w-sm-25" href="gallery.php">Gallery</a></li>
                                <li><a class="btn btn-warning w-100 w-sm-25" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-muted">
                                eh atau mau logout aja nih?
                            </div>
                            <ul class="d-flex flex-column flex-sm-row pt-3 list-unstyled">
                                <li><a href="logout.php" class="btn btn-danger w-100 w-sm-auto">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- ------------ -->
            </div>
        </div>    
        <!-- ---- -->
    <!-- ------- -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>