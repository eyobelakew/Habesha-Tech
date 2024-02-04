<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Habesha Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include "includes/top-nav-logo.php"; ?>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" style="height: 60px !important;"> 
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about-us.php">About us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact-us.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="hero d-flex align-items-center home">
    <div class="container">
      <div class="text-center">
         <h2 style="text-shadow:2px 2px 5px #000">Bring Your Business Online</h2>
         <h4 style="text-shadow:2px 2px 5px #000">With Habesha Tech Services</h4>
        
      </div>

    </div>
    <style type="text/css">
      
.home .wave{
    position: absolute;
    bottom: -.5rem;
    left: 0;
    height: 6rem;
    width: 100%;
    background: url(assets/img/wave.png);
    background-size: 100rem 6rem;
    animation: waves 8s linear infinite;
    background-repeat: repeat-x;
}

.home .wave2{
    animation-direction: reverse;
    animation-duration: 6s;
    opacity: .3;
}

.home .wave3{
    animation-duration: 4s;
    opacity: .5;
}

@keyframes waves{
    0%{
        background-position-x: 0;
    }
    100%{
        background-position-x: 100rem;
    }
}


    </style>

    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
  </section><!-- End Hero Section -->

  <main id="main">
    <section id="about" class="about pt-0 mt-5">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p style="font-size: 17px;">Welcome to Habesha Tech, a prominent Ethiopian IT consulting and custom software development company. Our headquarters are based in Bahir Dar, Ethiopia. We specialize in delivering top-notch IT Services and Solutions, including software development, shortcode SMS integration, website development, and mobile application development. Trust us for cutting-edge technology solutions tailored to meet your specific needs.</p>
            <a href="about-us.php" class="btn btn-primary">Learn more about us</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
            <div class="card-img text-center">
            <img src="assets/img/keyboard.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Software Development & Implementation</h3>
              <p>Design & Develop Custom Software Solutions that empower Ethiopian businesses to stay ahead of their competition.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img text-center">
              <img src="assets/img/website.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">

              </div>
              <h3>Website Design & Development</h3>
              <p>Designing and creating custom built websites, web portals and web applications. We analyze and research the market trends and collaborate these with your business requirements.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
            <div class="card-img text-center">
            <img src="assets/img/erp.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>ERP System Development & Implementation</h3>
              <p>Enhance Business Operations with Comprehensive ERP Software in Ethiopia Streamlining Data Flow for Accounting, Fleet Management, Inventory, Sales, HR, and More</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
            <div class="card-img text-center">
            <img src="assets/img/message.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Shortcode SMS Messaging</h3>
              <p>SMS service provider in Ethiopia allows to send SMS in group using bulk SMS gateway.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
            <div class="card-img text-center">
            <img src="assets/img/app-development.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Mobile App Development</h3>
              <p>Develops and customizes custom mobile application development solutions for the specific needs of any business.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
            <div class="card-img text-center">
            <img src="assets/img/server.png" style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Server Hosting and Configuration</h3>
              <p>High quality affordable software and web hosting services for companies of all sizes. Host your website or software on a reliable server.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->


 
  </main><!-- End #main -->

  <?php include "includes/footer.php"; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>