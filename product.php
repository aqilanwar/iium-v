<?php
  include 'inc/connection.php';
  session_start();
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
  <?php include 'inc/header.php' ?>
  <!-- ======= Hero Section ======= -->
    <div class="container" style="margin-top:150px;">
      <h1>Looking for product?</h1>
      <div class="card">
        <div class="card-body">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Personal Tutor, Cleaner etc." aria-label="Personal Tutor, Cleaner etc."  aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Delivery Service</a>
                <a class="dropdown-item" href="#">Educational Service</a>
                <a class="dropdown-item" href="#">Cleaning Service</a>
                <a class="dropdown-item" href="#">Others</a>
              </div>
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">
                <span class="material-icons">
                search
                </span></button>
            </div>
          </div>
        </div>
      </div>
      <h1>Product Listing</h1>
      <?php
        $query = "SELECT * FROM product WHERE type = 'Product' ORDER BY product_date DESC";
        $result = mysqli_query($sql_connect, $query);                    
        while ($prod = mysqli_fetch_assoc($result)) {
      ?>
      <div class="card">
        <div class="card-body">
        <div class="image" style="max-height:192px; " >
          <?php
            $id = $prod['product_id'];
            $query2 = "SELECT pic_name FROM pic_product WHERE product_id = '$id'";
            $result2 = mysqli_query($sql_connect, $query2);  
            $pic = mysqli_fetch_assoc($result2);
          ?>
            <img style="max-height:190px; object-fit:scale-down;" src="images/<?php echo $pic['pic_name'] ?>" alt="">
          </div>
          <div class="title">
              <h4 style="font-weight:1000;"><?php echo $prod['product_title']?></h4>
              <p style="width: 650px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                <?php echo $prod['product_des']?>
              </p>
              <?php
              $query_min_price = "SELECT MIN(`var_product_price`) AS lowest , MAX(`var_product_price`) AS highest FROM  `var_product` WHERE product_id = '$id'";
              $result_price = mysqli_query($sql_connect, $query_min_price);   
              if ($row = mysqli_fetch_array($result_price)) {
                if($row['highest'] == $row['lowest'])
                  $price = 'RM'.$row['highest'];
                   
                else  
                  $price = 'RM'.$row['lowest'].'- RM '.$row['highest'];
              } 
            ?>
              <h4 class="price-tag">Price : <?php echo $price ?></h4>
              <div class="btn-prod">
              <form action="view.php" method="get">
                <button class="go-to-btn" name="view_prod" type="submit" value="<?php echo $prod['product_id']; ?>">See Product</button>
                <button class="contact-btn">WhatsApp <i class="fa fa-whatsapp" style="font-size:24px"></i></button>
              </form>
              </div>
          </div>
          <div class="detail">
            <p class="verified">
              <span class="material-icons">
                segment
              </span>
              <?php echo $prod['product_category']?>
            </p>
            <p class="name">
              <span class="material-icons">
                account_circle
                </span>
              <a href="#"><?php echo $prod['user_id']?></a>
            </p>
            <p class="verified">
              <span class="material-icons">
              date_range
              </span>
              <?php echo date(" F j, Y - g:i a", strtotime($prod["product_date"])) ?>
            </p>
            <p class="verified">
              <span class="material-icons">
              verified_user
              </span>
              Verified User
            </p>
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