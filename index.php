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
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Shopping more and ease your life with </h1>
          <h1 style="color:#4154f1" data-aos="fade-up" data-aos-delay="400">IIUM Pocket Money.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">#1 trusted e-commerce site for IIUM students !</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="signup.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Sign Up Now!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>About Us</h3>
              <p>Over the years, there are many ecommerce patform that have emerged but there is no specific platform are targeting
                IIUM communities specifically as their user.<br><br>This platform are created based on the counter action of problems that have
                been circulating in IIUM Community . We are glad as we can help the IIUM communities to survive in the university life.
                We focus on the wellbeing and the problems for the user, in fact we will update the system according to what user want.</p>
              <div class="text-center text-lg-start">
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/about-us.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Our Mission </h2>
          <p>A platform for IIUM family</p>
        </header>
        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>To enable student earn extra money</h3>
              <p>Students now can gain side income without worrying their cost and distance . Offer your service or product and you will get the money that you need to survive!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>To help provide services for IIUM family</h3>
              <p>IIUM family will no longer depends on the outsiders in order to get services and product . It also cost efficient for the IIUM family to use other platform . In IIUM we study , in IIUM we serve!!</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>To help everybody get the job done in easier way</h3>
              <p>Both users and sellers/ service provider will gain benefit in term of cost , time and energy . We assure you that IIUM Pocket Money is the best choice for all.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <header class="section-header">
        <h2>SERVICES</h2>
      </header>
      <div class="container" data-aos="fade-up">
        <form method="GET" action="services.php">
          <div class="search-header">
            <p>Looking for services ?</p>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="title" placeholder="Personal Tutor, Cleaner etc." aria-label="Personal Tutor, Cleaner etc." aria-describedby="basic-addon2" required>
              <input name="category" value="1" hidden>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary">
                  <span class="material-icons">
                    search
                  </span>
                </button>
              </div>
            </div>
          </div>
        </form>

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="assets/img/services-1-2.png" width="200px" alt="">
              <h3>Delivery Service </h3>
              <p>Within a specific region, a delivery service offers fast, sometimes same-day delivery. A delivery service may specialize in one form of delivery, such as food delivery, or it may deliver a variety of packages.</p>
              <a href="services.php?title=&category=2" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="assets/img/services-4.png" width="200px" alt="">
              <h3>Educational Service</h3>
              <p>Classes, programmes, events, or other resources intended to provide an adequate education to a student who has been identified as needing special education or who has not been identified as needing special education. </p>
              <a href="services.php?title=&category=3" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="assets/img/services-3.png" width="200px" alt="">
              <h3>Cleaning Service </h3>
              <p>This includes dusting, vacuuming, sweeping and mopping the floors in Mahallah. Wash motorcycle or do laundry for you . This type of services is related to cleaning things that you want.</p>
              <a href="services.php?title=&category=4" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Others</h3>
              <p>This type of services is the services are not in the categories of those three. It can be nurseries , photographer and many more!</p>
              <a href="services.php?title=&category=5" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <section id="products" class="products">
      <header class="section-header">
        <h2>PRODUCT</h2>
      </header>
      <div class="container" data-aos="fade-up">
        <form method="GET" action="product.php">
          <div class="search-header">
            <p>Looking for product ?</p>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="title" placeholder="Nasi Lemak, iPhone 12 Mini" aria-label="Nasi Lemak, iPhone 12 Mini" aria-describedby="basic-addon2" required>
              <input name="category" value="1" hidden>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary">
                  <span class="material-icons">
                    search
                  </span>
                </button>
              </div>
            </div>
          </div>
        </form>

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="assets/img/fnb-1.jpg" width="150px" alt="">
              <h3>Food And Beverages</h3>
              <p>This page will be including any sort of foods that students and staff offers. From chocolate jar to home made food . Explore more for a happy tummy.</p>
              <a href="product.php?title=&category=2" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="assets/img/fashion.png" width="250px" alt="">
              <h3>Fashion</h3>
              <p>You will find clothing or fashion related product in this page. Shoes, shirts , pants , scarf and many more. It will be in two condition which are used and new. </p>
              <a href="product.php?title=&category=3" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="assets/img/elec.jpg" width="150px" alt="">
              <h3>Electronics</h3>
              <p>This section will provides you the electronics that you need. From laptop to phones, or mini refrigerator or printer. It will be in two condition which are used and new.</p>
              <a href="product.php?title=&category=4" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Others</h3>
              <p>This type of products are the products that are not in the categories of those three. It can be transport, utility , convinience good and many more!</p>
              <a href="product.php?title=&category=5" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Contact Us</p>
          <div class="social-media" style="display: flex;justify-content: center;">
            <a style="padding: 20px;font-size: 200px; border-radius: 50%;" href="https://twitter.com/iiumpocketmoney" class="fa fa-twitter "></a>
            <a style="padding: 20px;font-size: 200px; border-radius: 50%;" href="https://www.facebook.com/IIUM-Pocket-Money-111891700981507" class="fa fa-facebook"></a>
            <a style="padding: 20px;font-size: 200px; border-radius: 50%;" href="https://www.instagram.com/iiumpocketmoney/" class="fa fa-instagram"></a>
          </div>



        </header>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>