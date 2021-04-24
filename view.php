<?php
include 'inc/connection.php';
session_start();
$id = $_GET['view_prod'];
$query = "SELECT * FROM product WHERE product_id = '$id' ";
$result = mysqli_query($sql_connect, $query);
$row = mysqli_fetch_assoc($result);

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  .quantity {
    display: inline-block;
  }

  .quantity .input-text.qty {
    width: 35px;
    height: 39px;
    padding: 0 5px;
    text-align: center;
    background-color: transparent;
    border: 1px solid #efefef;
  }

  .quantity.buttons_added {
    text-align: left;
    position: relative;
    white-space: nowrap;
    vertical-align: top;
  }

  .quantity.buttons_added input {
    display: inline-block;
    margin: 0;
    vertical-align: top;
    box-shadow: none;
  }

  .quantity.buttons_added .minus,
  .quantity.buttons_added .plus {
    padding: 7px 10px 8px;
    height: 41px;
    background-color: #ffffff;
    border: 1px solid #efefef;
    cursor: pointer;
  }

  .quantity.buttons_added .minus {
    border-right: 0;
  }

  .quantity.buttons_added .plus {
    border-left: 0;
  }

  .quantity.buttons_added .minus:hover,
  .quantity.buttons_added .plus:hover {
    background: #eeeeee;
  }

  .quantity input::-webkit-outer-spin-button,
  .quantity input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    margin: 0;
  }

  .quantity.buttons_added .minus:focus,
  .quantity.buttons_added .plus:focus {
    outline: none;
  }

  .addtocart {
    background-color: black;
    color: white;
    border: none;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }

  .ads-detail {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
    margin-top: 30px;
  }

  .carousel-container {
    width: 100%;
    height: 400px;
    position: relative;
    overflow: hidden;
  }

  .carousel {
    padding: 0;
    margin: 0;
    list-style: none;
    transition: 300ms transform ease-in;
  }

  .slide {
    padding: 0;
    margin: 0;
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .slide img {
    width: 100%;
    height: 400px;
    object-fit: contain;
  }

  .btn:focus {
    outline: none;
  }


  .btn {
    color: grey;
    z-index: 1;
    font-size: 30px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    cursor: pointer;
  }

  .left-btn {
    left: -5px;
  }

  .right-btn {
    right: -5px;
  }

  .nav {
    width: 100%;
    height: 30px;
    position: absolute;
    top: 400px;
    display: flex;
    justify-content: center;
  }

  .nav .dot {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    background: rgb(200, 200, 200);
    color: blue;
    border: none;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 8px 10px;
    cursor: pointer;
  }

  .dot.active {
    background: white;
  }

  .hide {
    display: none;
  }

  .container-slider {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 100%;
    height: 400px;
    margin: 0 auto;
    position: relative;
  }
</style>



<body>
  <!-- ======= Header ======= -->
  <?php include 'inc/header.php' ?>
  <!-- ======= Hero Section ======= -->
      <?php 
        if($found == false){ 
    ?>
      <div class="container" style="margin-top:150px; height:80vh">
        <div class="card-body cart">
          <div class="col-sm-12 empty-cart-cls text-center"> <img src="assets/img/notfound.png" width="100" height="100" class="img-fluid mb-4 mr-3">
            <h3><strong>Ads not found :(</strong></h3>            
         </div>
         </div>
         </div>
    <?php 
        } else { 
    ?>
  <div class="container" style="margin-top:10%; border:1px">
    <div class="row">
      <div class="col-lg-6 hero-img">
        <div class="container-slider">
          <button class="btn left-btn hide">
            <i class="fa fa-chevron-circle-left"></i>
          </button>

          <div class="carousel-container">
            <ul class="carousel">
              <?php
              $query_pic = "SELECT * FROM pic_product WHERE product_id = '$id'";
              $result_pic = mysqli_query($sql_connect, $query_pic);
              $i = 0;

              while ($pic = mysqli_fetch_assoc($result_pic)) {
                $i++;
                if ($i == 1) {
              ?>
                  <li class="slide active">
                    <img src="images/<?php echo $pic['pic_name']; ?>" alt="">
                  </li>
                <?php } else { ?>

                  <li class="slide">
                    <img src="images/<?php echo $pic['pic_name']; ?>" alt="">
                  </li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
          <?php
          if ($i == 1) {
            echo '';
          } else {
            echo
            '<button class="btn right-btn">
                <i class="fa fa-chevron-circle-right"></i>
              </button>';
          }
          ?>
          <div class="nav">
            <?php
            for ($x = 0; $x < $i; $x++) {
              if ($i == 1) {
                echo '';
              } else if ($x == 0) {
                echo '<div class="dot active"></div>';
              } else {
                echo '<div class="dot"></div>';
              }
            } ?>
          </div>
        </div>
        <?php
        $query = "SELECT * FROM product WHERE product_id = '$id'";
        $result = mysqli_query($sql_connect, $query);
        $prod = mysqli_fetch_assoc($result);
        ?>
        <div class="ads-detail">
          <p class="name">
            <span class="material-icons align-middle">
              account_circle
            </span>
            <a href="viewprofile.php?id=<?php echo $prod['user_id'] ?>"><?php echo $prod['user_id']; ?></a>
          </p>
          <?php
          $checkverified = "SELECT acc_status FROM user WHERE username  = '" . $prod['user_id'] . "'";
          $resultcheckverified = mysqli_query($sql_connect, $checkverified);
          $verified = mysqli_fetch_assoc($resultcheckverified);
          if ($verified['acc_status'] == 'Verified') {
          ?>
            <p class="verified">
              <span class="material-icons align-middle">
                check_circle
              </span>
              Verified User
            </p>
          <?php } else { ?>
            <p class="verified">
            <span class="material-icons align-middle">
              error
            </span>
            Unverified User
          </p>
          <?php } ?>

          <p class="verified">
            <span class="material-icons align-middle">
              date_range
            </span>
            <?php echo date(" F j, Y - g:i a", strtotime($prod["product_date"])) ?>
          </p>
        </div>
      </div>

      <div class="col-lg-6 d-flex flex-column">
        <h3 style="font-weight:1000"><?php echo $prod['product_title']; ?></h3>
        <?php
        $query_min_price = "SELECT MIN(`var_product_price`) AS lowest , MAX(`var_product_price`) AS highest FROM  `var_product` WHERE product_id = '$id'";
        $result_price = mysqli_query($sql_connect, $query_min_price);
        if ($row = mysqli_fetch_array($result_price)) {
          if ($row['highest'] == $row['lowest'])
            $price = 'RM ' . $row['highest'];
          else
            $price = 'RM ' . $row['lowest'] . ' - RM ' . $row['highest'];
        }
        ?>

        <h4 style="padding:20px;background-color: #eee6ff; text-align:center; font-weight:1000"><?php echo $price; ?></h4>
        <textarea name="" id="" cols="30" rows="10" disabled><?php echo $prod['product_des']; ?></textarea>
        <div class="option" style="display:flex; margin-top:10px;">
          <h4 style="font-weight:1000">Variation : </h4>
          <form action="inc/addtocart.php" method="POST">
            <ul style="list-style-type: none;">
              <?php
              $query2 = "SELECT * FROM var_product WHERE product_id = '$id' ORDER BY var_product_price asc";
              $result2 = mysqli_query($sql_connect, $query2);
              while ($var = mysqli_fetch_assoc($result2)) {
              ?>
                <li>
                  <?php
                  if ($var['var_product_quan'] <= 0) {
                    echo '<input type="radio" id="variation" value="' . $var['var_product_id'] . '" name="variation" disabled/>';
                  } else {
                    echo '<input type="radio" id="variation" value="' . $var['var_product_id'] . '" name="variation" />';
                  }
                  ?>
                  <label for="variation"><?php echo 'RM' . $var['var_product_price'] . ' - ' . $var['var_product_title']; ?> (Quantity Available : <span id="quan"><?php echo $var['var_product_quan']; ?></span> )</label>
                </li>
              <?php } ?>
            </ul>
        </div>
        <div class="option" style="display:flex; margin-bottom:20px;">
          <h4 style="font-weight:1000">Quantity : </h4>
          <div class="quantity buttons_added" style="margin-left:30px;">
            <input type="button" value="-" class="minus">
            <input type="number" step="1" min="1" max="" name="quantity" id="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" onchange="box_quan();">
            <input type="button" value="+" class="plus">
          </div>
        </div>
        <input type="text" value="<?php echo $id ?>" name="prodid" id="prodid" hidden>
        <div class="btn-prod">
          <?php
          if (isset($_SESSION['Admin'])) {
            echo '';
          } else if (!isset($_SESSION['User'])) {
            echo '';
          } else if ($_SESSION['User'] == $prod['user_id']) {
            echo '';
          } else {
            $phonenumquery = "SELECT phone_num FROM user WHERE username = '" . $prod['user_id'] . "' ";
            $phonenumresult = mysqli_query($sql_connect, $phonenumquery);
            $phonenum = mysqli_fetch_assoc($phonenumresult);
          ?>
            <button type="submit" name="submit" value="submit" class="go-to-btn">Add to cart <i class='fa fa-shopping-cart'></i></button>
            <button type="button" class="contact-btn" target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $phonenum['phone_num'] ?>')" ;>WhatsApp <i class="fa fa-whatsapp" style="font-size:24px"></i></button>
            <p class="form-message"></p>
          <?php } ?>
        </div>
      </div>
      </form>
    </div>
  </div>

  <?php
  $query4 = "SELECT * FROM review WHERE product_id = '$id' ";
  $result4 = mysqli_query($sql_connect, $query4);
  $totalrow = mysqli_num_rows($result4);

  ?>
  <div class="container" style="margin-top:50px">
    <h1>Review ( <?php echo $totalrow ?> )</h1>
  </div>
  <?php
  if ($totalrow == 0) {
  ?>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column">
                <p>No review on this product yet . </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php } else {
    while ($row4 = mysqli_fetch_assoc($result4)) {

      $queryprofilepic = "SELECT profile_pic FROM user WHERE username = '" . $row4['review_username'] . "'";
      $resultpic = mysqli_query($sql_connect, $queryprofilepic);
      $pic = mysqli_fetch_assoc($resultpic);

      $queryvariation = "SELECT var_product_title FROM var_receipt WHERE var_receipt_id = '" . $row4['receipt_id'] . "'";
      $resultvariaton = mysqli_query($sql_connect, $queryvariation);
      $variation = mysqli_fetch_assoc($resultvariaton);

    ?>

      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="container" style="margin:60px">
              <div class="row">
                <div class="col-md-4">
                  <img src="images/profile/<?php echo $pic['profile_pic'] ?>" style="border-radius:50%;object-fit:scale-down;  width: 70px;">
                </div>
                <div class="col-lg-6 d-flex flex-column">
                  <h1><?php echo $row4['review_username'] ?></h1>
                  <p> Variation : <?php echo $variation['var_product_title'] ?></p>
                  <hr>
                  <p><?php echo $row4['review_content']  ?></p>
                  <p style="font-size:12px ; text-align:right"> Date : <?php echo date(" F j, Y - g:i a", strtotime($row4["date"])) ?></p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  <?php 
  }}} ?>



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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/cart.js"></script>
  <script src="assets/js/ajax.js"></script>

  <script src="carousel.js"></script>


</body>

</html>