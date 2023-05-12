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
    <title>Contact</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
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
    <div class="container p-3">
        <div class="card">
            <div class="display-5 fw-bold px-2 py-2">
                Kontak ku....
            </div>
            <hr>
            <div class="d-flex flex-wrap p-3 gap-1">
                hei sepertinya kamu ada di halaman terakhir. Mau kembali? <a class="text-decoration-none" href="index.html">Home</a>
            </div>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center gap-3 my-5">
        <div class="card bg-light shadow-lg p-3" style="width: 100%; height: max-content;">
           <div class="display-5 fw-bold border-bottom">
            Coming Soon
           </div> 
           <br>
           <div class="card">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="https://www.pngkey.com/png/detail/157-1572938_phone-red-png-contact-icon.png" alt="Phone - Red Png Contact Icon@pngkey.com" width="150px">
                    </div>
                    <div>
                        <div class="h4 fw-bold py-1 px-3">
                            Contact-Name
                        </div>
                        <div class="py-3 px-3">
                            <a class="btn btn-success w-100" href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="card bg-light shadow-lg p-3" style="width: 100%; height: max-content;">
           <div class="display-5 fw-bold border-bottom">
            Coming Soon
           </div> 
           <br>
           <div class="card">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="https://www.pngkey.com/png/detail/157-1572938_phone-red-png-contact-icon.png" alt="Phone - Red Png Contact Icon@pngkey.com" width="150px">
                    </div>
                    <div>
                        <div class="h4 fw-bold py-1 px-3">
                            Contact-Name
                        </div>
                        <div class="py-3 px-3">
                            <a class="btn btn-success w-100" href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="card bg-light shadow-lg p-3" style="width: 100%; height: max-content;">
           <div class="display-5 fw-bold border-bottom">
            Coming Soon
           </div> 
           <br>
           <div class="card">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="https://www.pngkey.com/png/detail/157-1572938_phone-red-png-contact-icon.png" alt="Phone - Red Png Contact Icon@pngkey.com" width="150px">
                    </div>
                    <div>
                        <div class="h4 fw-bold py-1 px-3">
                            Contact-Name
                        </div>
                        <div class="py-3 px-3">
                            <a class="btn btn-success w-100" href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="card bg-light shadow-lg p-3" style="width: 100%; height: max-content;">
           <div class="display-5 fw-bold border-bottom">
            Coming Soon
           </div> 
           <br>
           <div class="card">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="https://www.pngkey.com/png/detail/157-1572938_phone-red-png-contact-icon.png" alt="Phone - Red Png Contact Icon@pngkey.com" width="150px">
                    </div>
                    <div>
                        <div class="h4 fw-bold py-1 px-3">
                            Contact-Name
                        </div>
                        <div class="py-3 px-3">
                            <a class="btn btn-success w-100" href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="card bg-light shadow-lg p-3" style="width: 100%; height: max-content;">
           <div class="display-5 fw-bold border-bottom">
            Coming Soon
           </div> 
           <br>
           <div class="card">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="https://www.pngkey.com/png/detail/157-1572938_phone-red-png-contact-icon.png" alt="Phone - Red Png Contact Icon@pngkey.com" width="150px">
                    </div>
                    <div>
                        <div class="h4 fw-bold py-1 px-3">
                            Contact-Name
                        </div>
                        <div class="py-3 px-3">
                            <a class="btn btn-success w-100" href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!-- ------- -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>