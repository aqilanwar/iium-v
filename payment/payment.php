<?php
include '../inc/connection.php';
session_start();
$user = $_SESSION['User'];
if (empty($_SESSION['User'])) {
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Podcast4u : : Payment</title>
  <link rel="icon" href="images/logo.png" type="image/gif" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark" style="background-color: #000;">
    <a class="navbar-brand" href="../index.php">
      <img src="images/logo.png" style=" filter: invert(100%);-webkit-filter: invert(100%); margin-left: 40px;" width=150px; alt="">
    </a>
  </nav>
  <div class='container'>
    <div class='window'>
      <div class='order-info'>
        <div class='order-info-content'>
          <h1 style="text-align: center;">Order Summary</h1>
          <hr>
          <div class="cartNav">

            <?php
            $query = "SELECT * FROM shopping_cart WHERE username = '$user' ";
            $result = mysqli_query($sql_connect, $query);
            $total = 0;

            while ($cart = mysqli_fetch_assoc($result)) {

              $query2 = "SELECT * FROM var_product WHERE var_product_id = '" . $cart['var_product_id'] . "' ";
              $result2 = mysqli_query($sql_connect, $query2);
              $cart2 = mysqli_fetch_assoc($result2);

              $query3 = "SELECT * FROM pic_product WHERE product_id = '" . $cart['product_id'] . "' ";
              $result3 = mysqli_query($sql_connect, $query3);
              $cart3 = mysqli_fetch_assoc($result3);

              $query4 = "SELECT * FROM product WHERE product_id = '" . $cart['product_id'] . "' ";
              $result4 = mysqli_query($sql_connect, $query4);
              $cart4 = mysqli_fetch_assoc($result4);
            ?>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='../images/<?php echo $cart3['pic_name'] ?>' class='full-width'></img>
                    </td>
                    <td>
                      <br><span class='thin'><?php echo $cart4['product_title'] ?></span>
                      <br><small><?php echo 'Variation : ',  $cart2['var_product_title']; ?><br> <span class='thin small'><?php echo 'RM ', $cart2['var_product_price']; ?></small><br><span class='thin small'><?php echo 'Quantity : ', $cart['quantity']; ?><br><?php echo 'Seller : ', $cart4['user_id'] ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class='price'>
                        <?php $subtotal = $cart2['var_product_price'] * $cart['quantity'];
                        $displaysubtotal = number_format($subtotal, 2);
                        echo 'RM ', $displaysubtotal;
                        ?>
                      </div>
                    </td>

                  </tr>
                </tbody>
              </table>

              <hr>
            <?php
              $total = $total + $subtotal;
              $total = number_format($total, 2);
            }
            ?>
            <table class='order-table' style="margin-bottom:20px; text-align:center;">
              <tbody>
                <tr>
                  <td>
                  </td>
                  <td>
                    <h3>TOTAL : <?php echo 'RM ', $total ?></h3>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr>
          </div>
        </div>
      </div>

      <div class='credit-info'>
        <div class='credit-info-content'>
          <table class='half-input-table'>
            <tr>
              <td>Please select your card: </td>
              <td>
                <div class='dropdown' id='card-dropdown'>
                  <div class='dropdown-btn' id='current-card'>Visa</div>
                  <div class='dropdown-select'>
                    <ul>
                      <li>Master Card</li>
                      <li>American Express</li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
          Email Adress
          <form action="pay.php">
            <input type="email" class='input-field' required></input>
            Card Number
            <input type="text" maxlength="16" class='input-field'></input>
            Card Holder Name
            <input type="text" class='input-field' oninput="this.value = this.value.toUpperCase()"></input>

            <table class='half-input-table'>
              <tr>
                <td>CVV
                  <input type="text" maxlength="3" class='input-field'></input>
                </td>
                <td> MONTH
                  <select name="month" id="month" class='input-field'>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </td>
                <td> YEAR
                  <select name="year" id="year" class='input-field'>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                  </select>
                </td>
              </tr>
            </table>
            <button class='pay-btn'>Checkout</button>
          </form>

        </div>

      </div>
    </div>
  </div>
</body>
<script src="payment.js"> </script>

</html>