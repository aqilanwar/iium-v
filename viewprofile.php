<?php
include 'inc/connection.php';
session_start();

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE username = '$id' ";
$result = mysqli_query($sql_connect, $query);
$row = mysqli_fetch_assoc($result);

if (empty($_SESSION['User'])) {
    header("Location: login.php");
}
if ($id == $_SESSION['User']) {
    header("Location: profile.php");
}
if (empty($id)) {
    header("Location: profile.php");
}

$found = true ;
if (mysqli_num_rows($result) == 0) {
    $found = false;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IIUM : : Pocket Money</title>

  <!-- Favicons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<style>
.whatsapp {
    font-weight: 1000;
    padding: 10px 20px 10px 20px;
    font-size: 20px;
    width: 250px;
    background: #19d101 !important;
    border: none;
    color: rgb(255, 255, 255);
    border-radius: 100px;
}
</style>

<body>
  <!-- ======= Header ======= -->
  <?php include 'inc/header.php'; ?>
  <!-- ======= Hero Section ======= -->
    <?php 
        if($found == false){ 
    ?>
      <div class="container" style="margin-top:150px; height:80vh">
        <div class="card-body cart">
          <div class="col-sm-12 empty-cart-cls text-center"> <img src="assets/img/notfound.png" width="100" height="100" class="img-fluid mb-4 mr-3">
            <h3><strong>User not found :(</strong></h3>
            <h4>Continue shopping with us !</h4> <a href="services.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Services </a>
            <a href="product.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Product </a>
          </div>
         </div>';
    <?php 
        } else { 
    ?>
   <div class="container" style="margin-top:150px; height:100%">
    <div class="row">
      <div class="col-lg-6" style="width: 35%;">
        <div class="profile">
          <h1>Profile</h1>
          <div class="card" style="height: 100%;">
            <div class="card-body" style="display: flex; flex-direction: column;">
              <img src="images/profile/<?php echo $row['profile_pic'] ?>" style="border-radius:50%;  width: 100px;"alt="">
              <div class="container">
                <p class="verified align-middle" style="text-align:center; font-size:20px;">
                  <span class="material-icons align-middle" style="text-align:center; font-size:20px;">
                    verified_user
                  </span>
                  Verified User
                </p>
                <p class="title-profile">Full Name :</p>
                <p><?php echo $row['full_name'] ?></p>
                <p class="title-profile">Username :</p>
                <p><?php echo $row['username'] ?></p>
                <p class="title-profile">Phone Number :</p>
                <p><?php echo $row['phone_num'] ?></p>
                <p class="title-profile">Matric ID :</p>
                <p><?php echo $row['matricid'] ?></p>
                <p class="title-profile">Address :</p>
                <p><?php echo $row['address'] ?></p>
                <p class="title-profile">Gender :</p>
                <p><?php echo $row['gender'] ?></p>
                <p class="title-profile">Email :</p>
                <p><?php echo $row['email'] ?></p>
                <p class="title-profile">User Type :</p>
                <p><?php echo $row['user_type'] ?></p>

                <div class="center-btn">
                  <button class="whatsapp"  target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $row['phone_num'] ?>');">WhatsApp <i class="fa fa-whatsapp align-middle" style="font-size:20px"></i></button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" style="width: 65%;">
        <div class="dashboard">
          <div class="title-dashboard d-flex">
            <h1>Dashboard</h1>
          </div>


          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">Active Ads</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <?php
                  $query2 = "SELECT * FROM product WHERE user_id ='$id' ORDER BY product_date DESC";
                  $result2 = mysqli_query($sql_connect, $query2);
                  if (mysqli_num_rows($result2) == 0) {
                    echo '<p>You pending purchase is currently empty. Shop with us now !</p>';
                  } else {
                  while ($row2 = mysqli_fetch_assoc($result2)) {
                    $id = $row2['product_id'];
                    $querypic = "SELECT pic_name FROM pic_product WHERE product_id = '$id'";
                    $resultpic = mysqli_query($sql_connect, $querypic);
                    $pic = mysqli_fetch_assoc($resultpic);
                  ?>
                    <div class="card-body">
                      <div class="item d-inline-flex">
                        <div class="image" style="max-height: 192px; ">
                          <img style="height:190px; object-fit:scale-down;" src="images/<?php echo $pic['pic_name'] ?>" alt="">
                        </div>
                        <div class="title">
                          <h5><a href="view.php?view_prod=<?php echo $row2['product_id'] ?>"><?php echo $row2['product_title'] ?></a></h5>
                          <p class="name">
                            <span class="material-icons align-middle">
                              segment
                            </span>
                            <?php echo $row2['type']; ?>/<?php echo $row2['product_category']; ?>
                          </p>
                          <p class="verified">
                            <span class="material-icons align-middle">
                              date_range
                            </span>
                            <?php echo date(" F j, Y - g:i a", strtotime($row2["product_date"])) ?>
                          </p>
                          <p style="width: 350px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                            <?php echo $row2['product_des']; ?></p>
                        </div>
                      </div>
                    </div>
                    <hr>
                  <?php } }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IIUM Pocket Money 2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>