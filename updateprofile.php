<?php
include 'inc/connection.php';
session_start();

$usernameSESSION = $_SESSION['User'];
$query = "SELECT * FROM user WHERE username = '$usernameSESSION' ";
$result = mysqli_query($sql_connect, $query);
$row = mysqli_fetch_assoc($result);

if (!isset($_SESSION['User'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IIUM : : Pocket Money</title>
    <!-- Favicons -->
    <link href="assets/img/ipm-logo-01.png" rel="icon">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <style>
        .image_area {
            position: relative;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .modal-lg {
            max-width: 1000px !important;
        }

        .overlay {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.5);
            overflow: hidden;
            height: 0;
            transition: .5s ease;
            width: 100%;
        }

        .image_area:hover .overlay {
            height: 50%;
            cursor: pointer;
        }

        .text {
            color: #333;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'inc/header.php'; ?>

    <div class="container" style="margin-top:100px;">
        <div class="row">

            <div class="col-md-8" style=" margin: auto;width: 50%;padding: 10px;">
                <div class="profile">
                    <h1>Update Profile</h1>
                    <div class="card" style="height: 100%;">
                        <div class="card-body" style="display: flex; flex-direction: column;">
                            <div class="image_area" style=" margin: auto;">
                                <form method="post">
                                    <label for="upload_image">
                                        <img src="images/profile/<?php echo $row['profile_pic'] ?>" id="uploaded_image" width="20px" style="border-radius: 50%" class="img-responsive img-circle" />
                                        <div class="overlay">
                                            <div class="text">Click to Change Profile Image</div>
                                        </div>
                                        <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                                    </label>
                                </form>
                            </div>
                            <form method="post" action="inc/update.php" id="profiledetail">
                                <div class="container">
                                    <p class="verified align-middle" style="text-align:center; font-size:20px;">
                                        Verified
                                        <span class="material-icons align-middle" style="text-align:center; font-size:20px;">
                                            verified_user
                                        </span>
                                    </p>
                                    <p><strong>Username</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'] ?>" aria-label="Username" aria-describedby="basic-addon2" readonly>
                                    </div>
                                    <p><strong>Matric ID </strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Matric ID " value="<?php echo $row['matricid'] ?>" aria-label="Matric ID " aria-describedby="basic-addon2" readonly>
                                    </div>
                                    <p><strong>Email</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>" aria-label="Email" aria-describedby="basic-addon2" readonly>
                                    </div>
                                    <p><strong>Gender</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Gender" value="<?php echo $row['gender'] ?>" aria-label="Gender" aria-describedby="basic-addon2" readonly>
                                    </div>

                                    <p><strong>User Type</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="User Type" value="<?php echo $row['user_type'] ?>" aria-label="User Type" aria-describedby="basic-addon2" readonly>
                                    </div>
                                    <p><strong>Full name</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="<?php echo $row['full_name'] ?>" aria-label="Full Name" aria-describedby="basic-addon2 ">
                                    </div>
                                    <p><strong>Phone Number</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="phonenum" placeholder="Phone Number" value="<?php echo $row['phone_num'] ?>" aria-label="Phone Number" aria-describedby="basic-addon2">
                                    </div>

                                    <p><strong>Address</strong></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $row['address'] ?>" aria-label="Address" aria-describedby="basic-addon2">
                                    </div>
                                    <div class="center-btn">
                                        <button class="profile-update" id="btn-submit">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update profile picture</h5>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="" id="sample_image" />
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="crop" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>IIUM Pocket Money 2021</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function() {
        var $modal = $('#modal');
        var image = document.getElementById('sample_image');
        var cropper;
        $('#upload_image').change(function(event) {
            var files = event.target.files;

            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };

            if (files && files.length > 0) {
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
        });

        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });

        $('#crop').click(function() {
            canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 400
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $.ajax({
                        url: 'upload.php',
                        method: 'POST',
                        data: {
                            image: base64data
                        },
                        success: function(data) {
                            $modal.modal('hide');
                            $('#uploaded_image').attr('src', data);
                        }
                    });
                };
            });
        });

    });
</script>

<script>
    $(document).on('click', '#btn-submit', function(e) {
        e.preventDefault();
        var value = $(this).attr('value');
        Swal.fire({
            title: 'Save changes ?',
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
                        $("#profiledetail").submit() ; 
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });

    function notification() {
        Swal.fire(
            'Success !',
            'You have updated your profile .',
            'success'
        );
        document.getElementById("home-tab").className = "nav-link";
        document.getElementById("home").className = "tab-pane";

        document.getElementById("messages-tab").className += " active";
        document.getElementById("messages").className += " active";
    }
</script>