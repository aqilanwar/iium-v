<?php 
  session_start();
  if(isset($_SESSION['User'])){
    header("Location:profile.php");
  }else if(isset($_SESSION['Admin'])){
    header("Location:admindashboard.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IIUM : : Pocket Money</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include 'inc/header.php'; ?>

  
  <!-- ======= Hero Section ======= -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 hero-img " style="margin-top:15%;" data-aos="zoom-out" data-aos-delay="50">
            <img src="assets/img/signup.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="50">
          <div class="signup-form">    
            <form action="inc/signup.php" method="POST">
            <h1>Sign Up a new account and start posting ads for free !</h1>
                <!--Type Of User -->               
                <div class="form-group" >
                <p class="input-title" >User Type</p>
                  <select class="form-select" name="usertype" aria-label="usertype"  id="usertype">
                    <option value="0">Select User Type</option>
                    <option value="1">Staff</option>
                    <option value="2">Student</option>
                  </select>
                </div>

                <!--Gender -->         
                <div class="form-group">
                <p class="input-title" >Gender</p>
                  <select class="form-select" name="gender" aria-label="gender"  id="gender">
                    <option value="0">Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>   
 
                <!--Mahallah -->         
                <div class="form-group" id="address">
                <p class="input-title" >Mahallah</p>
                  <select class="form-select" name="realaddress" aria-label="realaddress"  id="realaddress">
                    <option value="0">NON-RESIDENT</option>
                    <option value="1">Mahallah Ali Abi Talib</option>
                    <option value="2">Mahallah Al-Faruq</option>
                    <option value="3">Mahallah As-Siddiq</option>
                    <option value="4">Mahallah Bilal Ibn Rabah</option>
                    <option value="5">Mahallah Uthman Ibn Affan</option>
                    <option value="6">Mahallah Zubair Al-Awwam</option>
                    <option value="7">Mahallah Safiyyah</option>
                    <option value="8">Mahallah Aminah</option>
                    <option value="9">Mahallah Asiah</option>
                    <option value="10">Mahallah Halimatus Sa'adiah</option>
                    <option value="11">Mahallah Hafsa</option>
                    <option value="12">Mahallah Asma'</option>
                    <option value="13">Mahallah Nusaibah</option>
                    <option value="14">Mahallah Sumayyah</option>
                    <option value="15">Mahallah Salahuddin Al-Ayubi</option>
                  </select>
                </div>                  
                
                 <!-- Full Address -->
                 <div class="form-group" id="address-all" >
                  <p class="input-title" >Address</p>
                  <input type="text"  name="homeaddress" id="homeaddress" class="form-control" placeholder="Address" >
                 </div>

                <!-- UserName -->               
                <div class="form-group">
                    <p class="input-title" >Username</p>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" >
                </div>
                 <!-- Full Name -->               
                <div class="form-group">
                    <p class="input-title" >Full Name</p>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" >
                </div>

                 <!-- Email -->
                 <div class="form-group">
                    <p class="input-title" >Email</p>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                </div>

                 <!-- Matric ID -->
                <div class="form-group">
                    <p class="input-title" id="id-title">Matric ID</p>
                    <input type="text" id="matricid" name="matricid" class="form-control" placeholder="Insert your ID" >
                </div>

                 <!-- Phone Number -->
                <div class="form-group">
                    <p class="input-title" >Phone Number</p>
                    <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Example : 60123456789" >
                </div>

                 <!-- Password -->
                <div class="form-group">
                    <p class="input-title" >Password</p>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>

                 <!-- Confirm Password -->
                <div class="form-group">
                    <p class="input-title" >Confirm Password</p>
                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" >
                </div>
                <input type="submit" name="signup" value="Submit" class="btn btn-primary btn-block btn-lg " >    
                <p class="form-message"></p>          
            </form>			
            <div class="text-center small">Already have account? <a href="login.php">Log in</a></div>
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

          $("#address").change(function(){
          var selectedAddress = $(this).children().children("option:selected").val();
          console.log(selectedAddress);
            if(selectedAddress == 0){
              $("#address-all").show();
              var homeaddress = $("#homeaddress").val('');

            }else{
              $("#address-all").hide();
              var homeaddress = $("#homeaddress").val("None");
              
            }
          });

          $("#usertype").change(function(){
          var selectedUser = $(this).children("option:selected").val();
            if(selectedUser == 1){
              $("#id-title").text("Staff ID");
              $("#realaddress").show();
              $("#address").hide();

            }else if(selectedUser == 2){
              $("#id-title").text("Student ID");
              $("#address").show();

            }
          });
          $("form").submit(function(event) {
            event.preventDefault();
            var usertype = $("#usertype").val();
            var gender = $("#gender").val();
            var username = $("#username").val();
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var matricid = $("#matricid").val();
            var phonenumber = $("#phonenumber").val();
            var password = $("#password").val();
            var realaddress = $("#realaddress").val();
            var homeaddress = $("#homeaddress").val();
            var confirmpassword = $("#confirmpassword").val();
            
            $(".form-message").load("inc/signup.php", {
              usertype: usertype,
              gender: gender,
              username: username,
              fullname: fullname,
              email: email,
              matricid: matricid,
              phonenumber: phonenumber,
              realaddress: realaddress,
              homeaddress: homeaddress,
              password: password,
              confirmpassword: confirmpassword
            });
          });
      });

  </script>
</body>

</html>