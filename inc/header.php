<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo (2).png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="product.php">Products</a></li>
          <?php
            if (isset($_SESSION['User'])) {
              echo '        
              <li class="dropdown"><a class="nav-account"> 
              <span class="material-icons">
                account_circle
              </span>
              <span> '.$_SESSION['User'].'</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="postads.php">Post new ads</a></li>
                  <li><a href="inc/logout.php">Logout</a></li>
                </ul>
              </li>' ;
          }else{
            echo '
            <li><a class="nav-account signup" href="login.php">Sign Up/Login</a></li>
            ';
          }
          ?>
          <li><a class="nav-account" href="cart.php"><span class="material-icons">shopping_cart</span></a></li>
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->