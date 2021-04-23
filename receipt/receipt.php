<?php
include '../inc/connection.php';
session_start();
$user = $_SESSION['User'];
if (empty($_SESSION['User'])) {
    header("Location: login.php");
}
$id = $_GET['id'];
$query = "SELECT * FROM receipt WHERE receipt_id = '$id' ";
$result = mysqli_query($sql_connect, $query);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) == 0) {
    header("Location: ../profile.php");
}
$total = 0;
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>IIUM : : Pocket Money</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="style.css" rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"> <img src="logo.png" width="160"> </div>
                    <div class="invoice p-5">
                        <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, <?php echo $row['username'] ?></span> <span>You order has been confirmed and will be shipped in few days!</span>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span><?php echo date(" F j, Y - g:i a", strtotime($row["receipt_date"])) ?></span> </div>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Order Id</span> <span><?php echo $id ?></span> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="product border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    $query2 = "SELECT * FROM var_receipt WHERE receipt_id = '$id' ";
                                    $result2 = mysqli_query($sql_connect, $query2);
                                    while ($fetchrow = mysqli_fetch_assoc($result2)) {
                                        $querypic = "SELECT pic_name FROM pic_product WHERE product_id = '" . $fetchrow['product_id'] . "'";
                                        $resultpic = mysqli_query($sql_connect, $querypic);
                                        $pic = mysqli_fetch_assoc($resultpic);
                                    ?>
                                        <tr>
                                            <td width="20%"> <img src="../images/<?php echo $pic['pic_name'] ?>" width="50" height="50"> </td>
                                            <td width="60%"> <span class="font-weight-bold"><?php echo $fetchrow['product_title'] ?></span>
                                                <div class="product-qty"> <span class="d-block">Quantity:<?php echo $fetchrow['var_product_quan']; ?></span> <span>Variation : <?php echo $fetchrow['var_product_title'] ?></span> <span class="d-block">Seller : <?php echo $fetchrow['var_seller']; ?></span></div>
                                            </td>
                                            <td width="20%">
                                                <div class="text-right"> <span class="font-weight-bold">RM <?php $subtotal = number_format($fetchrow['var_product_price'], 2);
                                                                                                            echo $subtotal ?></span> </div>
                                            </td>
                                        </tr>
                                    <?php
                                        $total = $total + $fetchrow['var_product_price'];
                                        $total = number_format($total, 2);
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left"> <span class="font-weight-bold">Subtotal</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span class="font-weight-bold">RM <?php echo $total ?></span> </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>IIUM POCKET MONEY</span>
                    </div>
                    <button type="button" style="padding:20px; margin:20px" onclick="location.href='../profile.php'" class="btn btn-success">Go back to profile</button>
                    <div class="d-flex justify-content-between footer p-3"> <span>IIUM POCKET MONEY </span></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
  $(document).on('click', '#btn-submit', function(e) {
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
      }
  });

  
</script>