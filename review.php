<?php
session_start();
if (!isset($_SESSION['User'])) {
    header("Location:login.php");
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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <?php include 'inc/header.php' ?>
    <!-- ======= Hero Section ======= -->

    <div class="container" style="margin-top:150px;">
        <div class="container">

            <h2>Review</h2>

            <hr>

            <div class="row">
                <div class="col-md-8 " style="  margin: auto;width: 50%;border: 3px solid #4154f1;padding: 10px;">
                    <div class="container">
                        <div>
                            <form method="POST" action="upload_file.php" enctype="multipart/form-data">
                                <h4>Please fill in your review</h4>

                                <div class="image" style="text-align: center;">
                                    <img src="images/16172773550.jpg" width="200px" alt="">
                                </div>
                                <!-- Title -->
                                <div class="form-group">
                                    <p class="input-title">Product </p>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Product" required disabled>
                                </div>
                                <!-- Variation -->
                                <div class="form-group">
                                    <p class="input-title">Variation</p>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Variation" required>
                                </div>

                                <!-- Seller -->
                                <div class="form-group">
                                    <p class="input-title">Seller</p>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Seller" required>
                                </div>

                                <!-- Variation -->

                                <div class="form-group">
                                    <p class="input-title">Review</p>
                                    <textarea name="description" class="form-control" rows="10" placeholder="Write your experience about this product/seller..." required></textarea>
                                </div>
                                <div class="form-group">
                                <div id="wrapper">
                                    <button type="reset" id="reset" style="float:right;" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>

                        <!-- Pictures -->
                        <div class="row" style="margin-top:30px;">
                            <div id="image_preview" style="display:flex;">

                            </div>
                        </div>
                        <br>
                        <br>
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
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/validator.js"></script>
    <script src="dist/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="dist/assets/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script>
        // For Variation // 
        $(document).ready(function() {
            $("#variation").on("change", function() {
                var numInputs = $(this).val();
                $('#var-container').html('');
                for (var i = 1; i <= numInputs; i++) {
                    var j = i * 1;
                    var $section = $('<div class="variation" style="display:inline-flex"; ><div class="form-group" ><p class="input-title" >Title Variation ' + j + '<input type="" id="var-title[]" name="var-title[]" class="form-control" placeholder="Title Variation ' + j + '" required></div><div class="form-group"><p class="input-title" >Quantity Variation ' + j + '</p><input min="1" type="number" id="var-quan[]" name="var-quan[]" class="form-control" placeholder="Quantity Variation ' + j + '"></div><div class="form-group"><p class="input-title" >[RM]</p><input min="0" type="number" step="any" id="var-price[]" name="var-price[]" class="form-control" placeholder="Price for Variation  ' + j + '" required></div></div>');
                    $('#var-container').append($section);
                }
            });

            $("#reset").click(function() {
                $('#image_preview').html("");
            })

            $("#type").change(function() {
                var selectedType = $(this).children("option:selected").val();
                if (selectedType == 1) {
                    $("#type1").text("Food And Beverages");
                    $("#type2").text("Fashion");
                    $("#type3").text("Electronics");
                    $("#type4").text("Others");
                } else if (selectedType == 2) {
                    $("#type1").text("Delivery Service");
                    $("#type2").text("Educational Service");
                    $("#type3").text("Cleaning Service");
                    $("#type4").text("Others");
                }
            });


        });

        function preview_image() {
            var total_file = document.getElementById("upload_file").files.length;
            if (total_file > 6) {
                alert("You can only upload 5 images per ads.");
                const file = document.getElementById('upload_file');
                file.value = '';
            } else {
                for (var i = 0; i < total_file; i++) {
                    $('#image_preview').append("<img height=100px; src='" + URL.createObjectURL(event.target.files[i]) + "'><br>");
                }
            }
        }

        function notification() {
            Swal.fire(
                'You have succesfully post your ads!',
                'We will now redirect you to profile page.',
                'success'
            ).then(function() {
                window.location = "profile.php";
            });
        }
    </script>


    <?php
    if (isset($_SESSION['success'])) {
        echo '<script type="text/javascript">notification();</script>';
        unset($_SESSION['success']);
    }
    ?>
</body>

</html>