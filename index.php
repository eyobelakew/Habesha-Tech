<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Habesha Tech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include "includes/top-nav-logo.php"; ?>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <script src="https://ahaduvacancy.com/Includes/Script/jquery.min.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

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
      .home .wave {
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

      .home .wave2 {
        animation-direction: reverse;
        animation-duration: 6s;
        opacity: .3;
      }

      .home .wave3 {
        animation-duration: 4s;
        opacity: .5;
      }

      @keyframes waves {
        0% {
          background-position-x: 0;
        }

        100% {
          background-position-x: 100rem;
        }
      }
    </style>

    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
  </section>

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
            <p style="font-size: 17px;">Welcome to Habesha Tech, a prominent Ethiopian IT consulting and custom software
              development company. Our headquarters are based in Bahir Dar, Ethiopia. We specialize in delivering
              top-notch IT Services and Solutions, including software development, shortcode SMS integration, website
              development, and mobile application development. Trust us for cutting-edge technology solutions tailored
              to meet your specific needs.</p>
            <a href="about-us.php" class="btn btn-primary">Learn more about us</a>
          </div>
        </div>

      </div>
    </section>


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
                <img src="assets/img/keyboard.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Software Development & Implementation</h3>
              <p>Design & Develop Custom Software Solutions that empower Ethiopian businesses to stay ahead of their
                competition.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img text-center">
                <img src="assets/img/website.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">

              </div>
              <h3>Website Design & Development</h3>
              <p>Designing and creating custom built websites, web portals and web applications. We analyze and research
                the market trends and collaborate these with your business requirements.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img text-center">
                <img src="assets/img/erp.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>ERP System Development & Implementation</h3>
              <p>Enhance Business Operations with Comprehensive ERP Software in Ethiopia Streamlining Data Flow for
                Accounting, Fleet Management, Inventory, Sales, HR, and More</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img text-center">
                <img src="assets/img/message.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Shortcode SMS Messaging</h3>
              <p>SMS service provider in Ethiopia allows to send SMS in group using bulk SMS gateway.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img text-center">
                <img src="assets/img/app-development.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Mobile App Development</h3>
              <p>Develops and customizes custom mobile application development solutions for the specific needs of any
                business.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img text-center">
                <img src="assets/img/server.png"
                  style="margin-top: 30px; margin-bottom: 30px; height: 13rem; width: 13rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
              </div>
              <h3>Server Hosting and Configuration</h3>
              <p>High quality affordable software and web hosting services for companies of all sizes. Host your website
                or software on a reliable server.</p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Website <span style="color:#001F8D;">Design</span> And Development</h2>
          <center>
            <p style="max-width:800px;font-size:18px;" class="mt-4">Discover innovative website designs crafted by
              dynamic professionals in the web development industry. Our user-friendly websites are easily modifiable
              post-development, and we provide expert assistance for redesigns and modifications to enhance your online
              presence.</p>
    </center>
              <div class="row mt-2">
                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fab fa-cloudscale"></i>
                      <h5 style="color:#001F8D;"><strong>SUPER FAST</strong></h5>
                      <p class="text-muted">Elevate your website's speed to new heights with our lightning-fast and free
                        CDN powered by Cloudflare. <br>Experience accelerated performance like never before!</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fas fa-desktop"></i>
                      <h5 style="color:#001F8D;"><strong>RESPONSIVE</strong></h5>
                      <p class="text-muted">Craft a responsive and impeccably designed website tailored to meet the
                        unique requirements of your business or personal brand, effectively drawing in customers and
                        satisfying your company's objectives.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fas fa-shield-alt"></i>
                      <h5 style="color:#001F8D;"><strong>SECURED</strong></h5>
                      <p class="text-muted">Addressing security is a continuous priority for us, and we seamlessly
                        integrate robust measures at every stage of development. Your peace of mind is our commitment
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fas fa-dollar-sign"></i>
                      <h5 style="color:#001F8D;"><strong>FAIR COST</strong></h5>
                      <p class="text-muted">Optimizing with cutting-edge cloud technology, we manage costs efficiently,
                        ensuring a consistent 5-star performance for your satisfaction.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fas fa-mobile-alt"></i>
                      <h5 style="color:#001F8D;"><strong>MOBILE RESPONSIVE</strong></h5>
                      <p class="text-muted">Experience the convenience of our mobile-responsive websites, ensuring swift
                        loading times on all your mobile devices for seamless productivity.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-4">
                    <div class="card-body">
                      <i aria-hidden="true" style="color:#00114d;font-size:50px; margin-bottom:30px;"
                        class="fas fa-fingerprint"></i>
                      <h5 style="color:#001F8D;"><strong>PROTECTION AND SECURITY</strong></h5>
                      <p class="text-muted">Experience unparalleled security with our impressive features, including
                        Multi-Factor Authentication, auto-enabled sFTP, and complimentary secure hosting with Let's
                        Encrypt.</p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </div>
    </section>




<section class="container">
<div class="text-center mb-2">
<h2>Some Of <span style="color:#001F8D;">Our</span> Works</h2>
<center>
  <p style="max-width:800px;font-size:15px;" class="mt-4">Explore our portfolio of recently developed websites for the latest designs and inspiration. Visit the following links to spark creativity for your own project. Feel free to browse and gather ideas for your next venture! Our diverse range of projects showcases our commitment to excellence in web design.</p>
    </center>
    </div>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <p class="badge text-bg-secondary ms-5">Language</p>
            <h3 class="ms-5">Ahadu Vacancy</h3>
            <p class="ms-5">Ahadu-vacancy is the best job site in Ethiopia, with over 1500+ unique visitors every day. This website allows job seekers to view opportunities posted by different companies.</p>
            <a href="https://ahaduvacancy.com/" target="_blank" class="ms-5 btn btn-primary">OPEN WEBSITE</a>
          </div>
          <div class="col-md-6 mt-4 text-center">
            <img src="assets/img/clients/ahadu-vacancy.png" style="width:80%;">
          </div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <p class="badge text-bg-secondary ms-5">Language</p>
            <h3 class="ms-5">Negus Media</h3>
            <p class="ms-5">Negus Media provides the latest news and blogs on a wide range of topics! Users can find everything from world news to entertainment, lifestyle, technology, and more.</p>
            <a href="https://negusmedia.net/" target="_blank" class="ms-5 btn btn-primary">OPEN WEBSITE</a>
          </div>
          <div class="col-md-6 mt-4 text-center">
            <img src="assets/img/clients/negus-media.png" style="width:80%;">
          </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev me-auto" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <i class="bi bi-chevron-left" style="color:black;font-size:20px;"></i>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next ms-auto" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <i class="bi bi-chevron-right" style="color:black;font-size:20px;"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
  </main>

  <?php include "includes/footer.php"; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>