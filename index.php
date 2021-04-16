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
        <div class="search-header">
          <p>Looking for services ?</p>
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

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="assets/img/services-1-2.png" width="200px" alt="">
              <h3>Delivery Service </h3>
              <p>Within a specific region, a delivery service offers fast, sometimes same-day delivery. A delivery service may specialize in one form of delivery, such as food delivery, or it may deliver a variety of packages.</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="assets/img/services-4.png" width="200px" alt="">
              <h3>Educational Service</h3>
              <p>Classes, programmes, events, or other resources intended to provide an adequate education to a student who has been identified as needing special education or who has not been identified as needing special education. </p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="assets/img/services-3.png" width="200px" alt="">
              <h3>Cleaning Service </h3>
              <p>This includes dusting, vacuuming, sweeping and mopping the floors in Mahallah. Wash motorcycle or do laundry for you . This type of services is related to cleaning things that you want.</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Others</h3>
              <p>This type of services is the services are not in the categories of those three. It can be nurseries , photographer and many more!</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <section id="products" class="products">
      <header class="section-header">
        <h2>Product</h2>
      </header>
      <div class="container" data-aos="fade-up">
        <div class="search-header">
          <p>Looking for product ?</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ayam Goreng, iPhone 12 mini etc." aria-label="Personal Tutor, Cleaner etc."  aria-describedby="basic-addon2">
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

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="assets/img/fnb-1.jpg" width="150px" alt="">
              <h3>Food And Beverages</h3>
              <p>This page will be including any sort of foods that students and staff offers. From chocolate jar to home made food . Explore more for a happy tummy.</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="assets/img/fashion.png" width="250px" alt="">
              <h3>Fashion</h3>
              <p>You will find clothing or fashion related product in this page. Shoes, shirts , pants , scarf and many more. It will be in two condition which are used and new. </p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="assets/img/elec.jpg" width="150px" alt="">
              <h3>Electronics</h3>
              <p>This section will provides you the electronics that you need. From laptop to phones, or  mini refrigerator or printer. It will be in two condition which are used and new.</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Others</h3>
              <p>This type of products are the products that are not in the categories of those three. It can be transport, utility , convinience good and many more!</p>
              <a href="#" class="read-more"><span>Search Now !</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>