<?php       
    session_start();
    include 'connection.php';
    
    if (isset($_POST['submit'] )!== "") {
        $prodid =  $_POST['submit'];
        $userid = $_SESSION['User'];
        $sql = "DELETE FROM `shopping_cart` WHERE var_product_id = '$prodid' AND username = '$userid' ";
        $delete = mysqli_query($sql_connect, $sql);

        if($sql){
         header("Location: ../cart.php");

        }
    }

    ?>
