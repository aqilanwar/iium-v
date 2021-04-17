<?php
include 'inc/connection.php';
session_start();

$usernameSESSION = $_SESSION['User'];
$query = "SELECT matricid,username,full_name,gender,email,phone_num,user_type,address FROM user WHERE username = '$usernameSESSION' ";
$result = mysqli_query($sql_connect, $query);
$row = mysqli_fetch_assoc($result);

if (!isset($_SESSION['User'])) {
  header("Location: login.php");
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="container" style="margin-top:150px;">
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="50" style="width: 35%;">
                <div class="profile" >
                    <h1>Profile</h1>
                    <div class="card" style="height: 100%;">
                        <div class="card-body" style="display: flex; flex-direction: column;">
                            <img src="assets/img/profile.png" style="border-radius:50%" width="50px" alt="">
                            <div class="container">
                            <p class="verified align-middle" style="text-align:center; font-size:20px;">
                              <span class="material-icons align-middle" style="text-align:center; font-size:20px;">
                                verified_user
                              </span>
                            Verified User
                            </p>
                            <p class="title-profile">Full Name :</p><p><?php echo $row['full_name'] ?></p>
                            <p class="title-profile">Username :</p><p><?php echo $row['username'] ?></p>
                            <p class="title-profile">Phone Number :</p><p><?php echo $row['phone_num'] ?></p>
                            <p class="title-profile">Matric ID :</p><p><?php echo $row['matricid'] ?></p>
                            <p class="title-profile">Address :</p><p><?php echo $row['address'] ?></p>
                            <p class="title-profile">Gender :</p><p><?php echo $row['gender'] ?></p>
                            <p class="title-profile">Email :</p><p><?php echo $row['email'] ?></p>
                            <p class="title-profile">User Type :</p><p><?php echo $row['user_type'] ?></p>

                            <div class="center-btn">
                                <button class="profile-update">Update Profile</button>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="50" style="width: 65%;">
                <div class="dashboard">
                    <div class="title-dashboard d-flex">
                        <h1>Dashboard</h1>
                        <button class="new-ads-btn"><a style="color:white;" href="postads.php">Post a new ads !</a></button>
                    </div>


                    <div class="card text-center">
                        <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active Ads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pending Purchase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Purchase History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notification</a>
                            </li>
                        </ul>
                        </div>
                        <?php
                            $query2 = "SELECT * FROM product WHERE user_id ='$usernameSESSION' ORDER BY product_date DESC";
                            $result2 = mysqli_query($sql_connect, $query2);                    
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $id = $row2['product_id'];
                                $querypic = "SELECT pic_name FROM pic_product WHERE product_id = '$id'";
                                $resultpic = mysqli_query($sql_connect, $querypic);  
                                $pic = mysqli_fetch_assoc($resultpic);
                        ?>
                        <div class="card-body">
                            <div class="item d-inline-flex">
                                <div class="image"  style="max-height: 192px; ">
                                    <img style="height:190px; object-fit:scale-down;" src="images/<?php echo $pic['pic_name'] ?>" alt="">
                                  </div>
                                  <div class="title">
                                      <h4><?php echo $row2['product_title'];?></h4>
                                        <p class="name">
                                        <span class="material-icons align-middle">
                                            segment
                                            </span>
                                        <?php echo $row2['type'];?>/<?php echo $row2['product_category'];?>
                                        </p>
                                        <p class="verified">
                                        <span class="material-icons align-middle">
                                        date_range
                                        </span>
                                        <?php echo date(" F j, Y - g:i a", strtotime($row2["product_date"])) ?>
                                        </p>
                                      <p style="width: 350px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                      <?php echo $row2['product_des'];?></p>


                                      <div class="btn-prod">
                                        <button class="edit-btn">Edit</button>
                                        <button class="delete-btn">Delete</button>
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>