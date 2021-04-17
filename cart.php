<?php
  include 'inc/connection.php';
  session_start();
  $user = $_SESSION['User'];
  if(empty($_SESSION['User'])){
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
  <?php include 'inc/header.php' ?>
  <!-- ======= Hero Section ======= -->
    <div class="container" style="margin-top:150px; min-height:90vh;">
      <h1>Shopping Cart</h1>
        <div class="container">

            <tbody>
            <?php 
                $query = "SELECT * FROM shopping_cart WHERE username = '$user' ";
                $result = mysqli_query($sql_connect, $query); 
                $total = 0 ;
                if(mysqli_num_rows($result)== 0){
                  echo '
                          <div class="card-body cart">
                            <div class="col-sm-12 empty-cart-cls text-center"> <img src="assets/img/empty.png" width="100" height="100" class="img-fluid mb-4 mr-3">
                              <h3><strong>Your Cart is Empty :(</strong></h3>
                              <h4>Continue shopping with us !</h4> <a href="services.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Services </a>
                              <a href="product.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Product </a>
                            </div>
                           </div>
                  ' ;
                }else{
                  echo '
                  <table class="table">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col"></th>
                          <th scope="col" style="text-align:center;">Item</th>
                          <th scope="col"></th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Subtotal</th>
                          <th scope="col">Seller</th>
                      </tr>
                  </thead>
                  ';
                }

                while ($cart = mysqli_fetch_assoc($result)) {

                    $query2 = "SELECT * FROM var_product WHERE var_product_id = '".$cart['var_product_id']."' " ;
                    $result2 = mysqli_query($sql_connect,$query2);
                    $cart2 = mysqli_fetch_assoc($result2);

                    $query3 = "SELECT * FROM pic_product WHERE product_id = '".$cart['product_id']."' ";
                    $result3 = mysqli_query($sql_connect,$query3);
                    $cart3 = mysqli_fetch_assoc($result3);

                    $query4 = "SELECT * FROM product WHERE product_id = '".$cart['product_id']."' ";
                    $result4 = mysqli_query($sql_connect,$query4);
                    $cart4 = mysqli_fetch_assoc($result4);
            ?>
                <tr>
                    <th scope="row" style="text-align:center; vertical-align:middle;">
                    <form action="inc/deletecart.php" method="POST">
                      <button type="submit" name="submit" id="submit"  value ="<?php echo $cart['var_product_id']; ?>" class="btn btn-danger">
                          <span class="material-icons align-middle">
                              highlight_off
                          </span>
                      </button>
                    </form>
                    </th>
                    <td width=200px; style="text-align:center;">
                        <img src="images/<?php echo $cart3['pic_name'] ?>" height=100px; alt="">
                    </td>
                    <td style="vertical-align:middle;">
                        <p><a href="view.php?view_prod=<?php echo $cart['product_id'] ?>"><?php echo $cart4['product_title'] ?></a></p>
                        <p><?php echo 'Variation : ' ,  $cart2['var_product_title']; ?></p>
                    </td>
                    <td style="vertical-align:middle;">
                        <?php echo 'RM ', $cart2['var_product_price']; ?>
                    </td>
                    <td style="vertical-align:middle;">
                        <?php echo $cart['quantity']; ?>
                    </td>
                    <td style="vertical-align:middle;">
                        
                        <?php $subtotal = $cart2['var_product_price'] * $cart['quantity'] ; 
                            $subtotal = number_format($subtotal,2) ;
                            echo 'RM ' , $subtotal;
                        ?>
                    </td>
                    <td style="vertical-align:middle;">
                        <a href=""><?php echo $cart4['user_id'] ?> </a>
                    </td>
                </tr> 

                <?php
                    $total = $total + $subtotal ;
                    $total = number_format($total,2);

                  }
                ?>
            </tbody>
            </table>
            <div class="container" style="margin-bottom:200px;">
              <div class="card" style="width: 30rem; float:right;">
                <div class="card-body" style="flex-direction:column">
                  <h5 class="card-title">Grand Total : <?php echo'RM ' , $total ?></h5>
                  <hr>
                  <a href="#" class="btn btn-primary">Checkout</a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>