<?php 
  session_start();
  if(isset($_SESSION['User'])){
    header("Location:profile.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IIUM : : Pocket Money</title>
  <!-- Favicons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <link href="assets/img/ipm-logo-01.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include 'inc/header.php'; ?>

  
  <!-- ======= Hero Section ======= -->
  <div class="container" style="margin-top:150px; height: 77vh;">
    <div class="container">

          <div class="justify-content-center" data-aos="zoom-out" data-aos-delay="50">
            <div class="login-form">    
              <form action="inc/login.php" method="post">
              <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
                <h4 class="modal-title">Admin Login</h4>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="required" >
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required"  >
                  </div>
                  <input type="submit" class="btn btn-primary btn-block btn-lg " name="login" value="Login">  
                  <p class="form-message"></p>                      
              </form>			
          </div>
          </div>
        </div>

</div>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IIUM Pocket Money 2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/validator.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
     $(document).ready(function(){
        $("form").submit(function(event) {
            event.preventDefault();
            var username = $("#username").val();
            var password = $("#password").val();

          $(".form-message").load("inc/admin.php", {
              username: username,
              password: password
            });
          });
      });
  </script>

</body>

</html>