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

<body>
  <!-- ======= Header ======= -->
  <?php include 'inc/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <div class="container" style="margin-top:150px;">
    <div class="row">
      <div class="col-lg-6" style="width: 35%;">
        <div class="profile">
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
                  <button class="profile-update">Update Profile</button>
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
            <button class="new-ads-btn" onclick="location.href='postads.php'">Post a new ads !</button>
          </div>


          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Active Ads</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pending Purchase (2)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Success Purchase</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Notification</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                          <div class="btn-prod">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                  <?php } ?>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <?php
                  $query2 = "SELECT * FROM var_receipt WHERE username ='$usernameSESSION' AND status = 'Pending' ";
                  $result2 = mysqli_query($sql_connect, $query2);
                  if (mysqli_num_rows($result2) == 0) {
                    echo '<p>You pending purchase is currently empty. Shop now with us !</p>';
                  } else {
                    while ($row2 = mysqli_fetch_assoc($result2)) {

                      $querypic = "SELECT pic_name FROM pic_product WHERE product_id = '" . $row2['product_id'] . "'";
                      $resultpic = mysqli_query($sql_connect, $querypic);
                      $pic = mysqli_fetch_assoc($resultpic);

                      $query3 = "SELECT receipt_date FROM receipt WHERE receipt_id = '" . $row2['receipt_id'] . "'";
                      $result3 = mysqli_query($sql_connect, $query3);
                      $date = mysqli_fetch_assoc($result3);

                      $queryphone = "SELECT phone_num FROM user WHERE username = '" . $row2['var_seller'] . "'";
                      $resultphone = mysqli_query($sql_connect, $queryphone);
                      $phonenum = mysqli_fetch_assoc($resultphone);
                  ?>
                      <div class="card-body">
                        <div class="item d-inline-flex">
                          <div class="image" style="max-height: 192px; ">
                            <img style="height:190px; object-fit:scale-down;" src="images/<?php echo $pic['pic_name'] ?>" alt="">
                          </div>
                          <div class="title">
                            <h5><a href="view.php?view_prod=<?php echo $row2['product_id'] ?>"><?php echo $row2['product_title'] ?></a></h5>
                            <p><?php echo 'Variation : ', $row2['var_product_title']; ?></p>
                            <p><?php echo 'Quantity : ', $row2['var_product_quan']; ?></p>
                            <div style="display:flex">
                              <p>Seller : <a href=""><?php echo $row2['var_seller']; ?></a></p>
                            </div>
                            <div class="btn-prod">
                              <button name='rec_id' class="btn btn-primary" value="<?php echo $row2['var_receipt_id'] ?>" id="btn-submit">Item Received</button>
                              <button type="button" class="btn btn-success" target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $phonenum['phone_num'] ?>');"><i class="fa fa-whatsapp" style="font-size:20px"></i> Contact Seller </button>
                              <button type="button" class="btn btn-secondary" target="_blank" onclick="window.open('receipt/receipt.php?id=<?php echo $row2['receipt_id'] ?>');">View Receipt</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                  <?php }
                  } ?>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                  <?php
                  $query2 = "SELECT * FROM var_receipt WHERE username ='$usernameSESSION' AND status = 'Success' ";
                  $result2 = mysqli_query($sql_connect, $query2);
                  if (mysqli_num_rows($result2) == 0) {
                    echo '<p>You pending purchase is currently empty. Shop now with us !</p>';
                  } else {
                    while ($row2 = mysqli_fetch_assoc($result2)) {

                      $querypic = "SELECT pic_name FROM pic_product WHERE product_id = '" . $row2['product_id'] . "'";
                      $resultpic = mysqli_query($sql_connect, $querypic);
                      $pic = mysqli_fetch_assoc($resultpic);

                      $query3 = "SELECT receipt_date FROM receipt WHERE receipt_id = '" . $row2['receipt_id'] . "'";
                      $result3 = mysqli_query($sql_connect, $query3);
                      $date = mysqli_fetch_assoc($result3);

                      $queryphone = "SELECT phone_num FROM user WHERE username = '" . $row2['var_seller'] . "'";
                      $resultphone = mysqli_query($sql_connect, $queryphone);
                      $phonenum = mysqli_fetch_assoc($resultphone);
                  ?>
                      <div class="card-body">
                        <div class="item d-inline-flex">
                          <div class="image" style="max-height: 192px; ">
                            <img style="height:190px; object-fit:scale-down;" src="images/<?php echo $pic['pic_name'] ?>" alt="">
                          </div>
                          <div class="title">
                            <h5><a href="view.php?view_prod=<?php echo $row2['product_id'] ?>"><?php echo $row2['product_title'] ?></a></h5>
                            <p><?php echo 'Variation : ', $row2['var_product_title']; ?></p>
                            <p><?php echo 'Quantity : ', $row2['var_product_quan']; ?></p>
                            <div style="display:flex">
                              <p>Seller : <a href=""><?php echo $row2['var_seller']; ?></a></p>
                            </div>
                            <div class="btn-prod">
                            <?php
                              if($row2['review_status'] != 'YES'){
                              ?>
                                 <form action="review.php" method="post">
                                        <button name="review" value="<?php echo $row2['var_receipt_id'] ?>" class="btn btn-primary">Review Product </button>
                                        <button type="button" class="btn btn-success" target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $phonenum['phone_num'] ?>');"><i class="fa fa-whatsapp" style="font-size:20px"></i> Contact Seller </button>
                                        <button type="button" class="btn btn-secondary" target="_blank" onclick="window.open('receipt/receipt.php?id=<?php echo $row2['receipt_id'] ?>');">View Receipt</button>
                                  </form>
                            <?php  }else{
                              ?>
                                      <button type="button" class="btn btn-success" target="_blank" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $phonenum['phone_num'] ?>');"><i class="fa fa-whatsapp" style="font-size:20px"></i> Contact Seller </button>
                                      <button type="button" class="btn btn-secondary" target="_blank" onclick="window.open('receipt/receipt.php?id=<?php echo $row2['receipt_id'] ?>');">View Receipt</button>

                             <?php }
                              ?>


                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                  <?php }
                  } ?>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">This is setting</div>
              </div>
            </div>
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
  <script>
    $(document).on('click', '#btn-submit', function(e) {
      e.preventDefault();
      var value = $(this).attr('value');
      Swal.fire({
        title: 'Are you sure that you have received the item ?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Yes`,
        denyButtonText: `No`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Saving changes!',
            timer: 1000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                  const b = content.querySelector('b')
                  if (b) {
                    b.textContent = Swal.getTimerLeft()
                  }
                }
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              window.location.assign("inc/received.php?id=" + value);
            }
          })
        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')
        }
      })
    });

    function notification() {
      Swal.fire(
        'Thank you for shopping with us !',
        'We appreciate if you leave review for the item that you purchased.',
        'success'
      );
      document.getElementById("home-tab").className = "nav-link";
      document.getElementById("home").className = "tab-pane";

      document.getElementById("messages-tab").className += " active";
      document.getElementById("messages").className += " active";
    }

    function review() {
      Swal.fire(
        'We have received your feedback!',
        'Thank you for shopping with us.',
        'success'
      );
      document.getElementById("home-tab").className = "nav-link";
      document.getElementById("home").className = "tab-pane";

      document.getElementById("messages-tab").className += " active";
      document.getElementById("messages").className += " active";
    }
  </script>
  <?php
  if (isset($_SESSION['received'])) {
    echo '<script type="text/javascript">notification();</script>';
    unset($_SESSION['received']);
  }
  if (isset($_SESSION['review'])) {
    echo '<script type="text/javascript">review();</script>';
    unset($_SESSION['review']);
  }
  ?>
</body>

</html>