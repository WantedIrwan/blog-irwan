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
    <title>About</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
    <div class="container d-flex justify-content-center my-5">
        <div class="card bg-dark text-white shadow" style="height: max-content;">
          <div class="d-flex flex-row flex-wrap">
            <div class="col-md-6">
              <img src="../assets/nophoto.jpg" alt="photo" class="img-fluid rounded-start" style="border-radius: 7px; width: max-content; height: 520px;">
            </div>
            <div class="col-md-6">
              <div class="display-5 fw-bold px-2 py-1 border-bottom text-warning">
                Ahmad Irwan
              </div>
              <div class="p-3 border-bottom" style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis veritatis aliquid doloremque natus suscipit tempora ducimus sequi dolores voluptate explicabo facilis velit deserunt dolor asperiores aliquam numquam dolorem provident, vel, quas ab. Laborum placeat, assumenda, repellendus officia repudiandae unde dolor at consequuntur nulla eligendi laudantium commodi alias ipsam esse quidem voluptas eveniet minus saepe autem. Beatae minima deleniti autem, aperiam fuga voluptates hic qui cum, iure tempore cumque non alias nihil unde corrupti provident quibusdam quam nulla. Aliquam, facere nisi temporibus optio architecto beatae! Natus est qui quae culpa quisquam asperiores earum ea repudiandae, ipsa, at quasi praesentium blanditiis inventore reiciendis quam libero error quo incidunt excepturi sint cupiditate ut architecto totam repellat. Ipsum dolor, voluptatum explicabo eos sunt quidem dignissimos exercitationem ipsam numquam modi corporis quis excepturi quibusdam quo nobis, cupiditate, facere fugiat vel architecto beatae. Doloribus, ex molestias quibusdam voluptatibus vero ab? Distinctio unde in nobis libero blanditiis!
              </div>
              <div class="px-2 py-3 d-flex border-bottom" style="gap: 10px;">
                <a class="btn btn-primary" href="index.php">Back to Page</a>
                <a class="btn btn-success" href="gallery.php">Next to Page</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- ------- -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>