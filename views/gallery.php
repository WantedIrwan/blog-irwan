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
    <title>Gallery</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        img {
            width: 250px;
            height: 250px;
        }
    </style>
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
            <div class="rounded shadow-lg d-flex justify-content-center align-items-center" style="background-color: #FF3CAC;
            background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%); width: 100%; height: 30vh;">
                <div class="display-5 text-white fw-bold border-bottom py-2">
                    Welcome to Gallery....
                </div>
            </div>
            <div class="py-3 d-flex justify-content-center flex-wrap gap-1">
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <div class="card bg-light shadow-lg" style="width: max-content;">
                    <img src="https://source.unsplash.com/1280x960/?random" alt="photo" class="rounded-top">
                    <div class="text-dark px-2">
                        foto-title
                    </div>
                </div>
                <hr class="w-100">
                <a class="btn btn-primary" href="about.php">Back to Page</a>
                <a class="btn btn-success" href="contact.php">Next to Page</a>
            </div>
        </div>
        <!-- ------- -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>