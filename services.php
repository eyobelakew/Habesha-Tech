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
          <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About us</a></li>
          <li><a href="services.php" class="active">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact-us.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Services</h2>
              <p>Discover a variety of services tailored just for you. Our commitment to exceptional experiences is backed by top-notch customer support, making us your trusted partner in all your needs.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->



    <section id="domain-check" class="domain-check" style="background-color: #f8f9fa; padding: 40px 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2 class="text-center" style="color: #001F8D;">Check Domain Availability</h2>
        <div class="input-group mb-3">
          <input type="text" id="domain-name" class="form-control form-control-sm" placeholder="Domain" style="width: 200px; border-color: #001F8D;">
          <div class="input-group-append">
            <div class="dropdown">
              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="domain-type-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                .com
              </button>
              <ul class="dropdown-menu" aria-labelledby="domain-type-dropdown">
                <li><a class="dropdown-item" href="#">.com</a></li>
                <li><a class="dropdown-item" href="#">.net</a></li>
                <li><a class="dropdown-item" href="#">.org</a></li>
                <li><a class="dropdown-item" href="#">.info</a></li>
                <li><a class="dropdown-item" href="#">.biz</a></li>
                <li><a class="dropdown-item" href="#">.co</a></li>
                <li><a class="dropdown-item" href="#">.io</a></li>
                <!-- Add more options for other domain extensions as needed -->
              </ul>
            </div>
          </div>
          <button class="btn btn-primary btn-sm" id="check-domain-btn">Check</button>
        </div>
        <div id="domain-result" class="text-center"></div>
      </div>
    </div>
  </div>
</section>



<script>
  // Function to check domain availability
  function checkDomainAvailability(domain) {
    // Here you would make a request to your backend which would then query a domain registrar's API
    // For the sake of this example, let's assume the backend returns a response with the availability status
    // Replace this with actual backend API call

    // Mock response (replace with actual backend response)
    const isAvailable = Math.random() < 0.5; // Randomly simulate domain availability

    return isAvailable;
  }

  // Function to handle domain check button click
  document.getElementById("check-domain-btn").addEventListener("click", function() {
    const domainName = document.getElementById("domain-name").value.trim();
    const resultDiv = document.getElementById("domain-result");

    if (domainName === "") {
      resultDiv.textContent = "Please enter a domain name.";
      return;
    }

    const isAvailable = checkDomainAvailability(domainName);

    if (isAvailable) {
      resultDiv.textContent = `Congratulations! ${domainName} is available.`;
    } else {
      resultDiv.textContent = `${domainName} is not available. Try another domain.`;
    }
  });
</script>




<section class="hosting">
<div class="container">
<div class="row justify-content-center">
  <center>
<div class="row gy-4">

<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
 
    <div class="card-img text-center">
      <img src="assets/img/keyboard.png"
        style="margin-top: 30px; margin-bottom: 30px; height: 5rem; width: 5rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
    </div>
    <h3>WEB HOSTING</h3>
    <p>We provide the fastest website hosting and also domain registration in Ethiopia, Latest speed technologies are our passion. Unique security solutions are our specialty. Amazing technical support is our pride.</p>
  </div>
  


  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  
    <div class="card-img text-center">
      <img src="assets/img/keyboard.png"
        style="margin-top: 30px; margin-bottom: 30px; height: 5rem; width: 5rem; border-radius: 50%; box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3); display: block; margin-left: auto; margin-right: auto;">
    </div>
    <h3>WEBSITE DESIGN
</h3>
    <p>Designs a virtual identity for your successful business. For example joomla development, WordPress design, eCommerce website design with quality web design</p>
  </div>
  </center>
</div>  

</div>
  
</section>


    <!-- ======= Featured Services Section ======= -->
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
    <!-- End Services Section -->



    <section id="faq" class="faq">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-10">
        <h2 class="text-center" > Why You Need a <span style="color:#001F8D;">website</span> for Your Business</h2>
        <div class="accordion accordion-flush" id="why-website-faqs"><br>
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#essential-website">
                <i class="bi bi-plus question-icon"></i>
                Why is having a website essential for my business?
              </button>
            </h3>
            <div id="essential-website" class="accordion-collapse collapse" data-bs-parent="#why-website-faqs">
              <div class="accordion-body">
                In today's digital age, having a website is crucial for reaching potential customers, establishing credibility, and providing information about your products or services 24/7.
              </div>
            </div>
          </div><!-- # Essential Website -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stand-out-website">
                <i class="bi bi-plus question-icon"></i>
                How can a website help my business stand out from competitors?
              </button>
            </h3>
            <div id="stand-out-website" class="accordion-collapse collapse" data-bs-parent="#why-website-faqs">
              <div class="accordion-body">
                A professionally designed website with engaging content, intuitive navigation, and unique branding elements can differentiate your business from competitors and leave a lasting impression on visitors.
              </div>
            </div>
          </div><!-- # Stand Out Website -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#global-reach-website">
                <i class="bi bi-plus question-icon"></i>
                Can a website help me reach a broader audience?
              </button>
            </h3>
            <div id="global-reach-website" class="accordion-collapse collapse" data-bs-parent="#why-website-faqs">
              <div class="accordion-body">
                Absolutely. With a website, you can extend your reach beyond your local market and connect with potential customers globally, opening up new opportunities for growth and expansion.
              </div>
            </div>
          </div><!-- # Global Reach Website -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#brand-credibility-website">
                <i class="bi bi-plus question-icon"></i>
                How does a website contribute to building brand credibility?
              </button>
            </h3>
            <div id="brand-credibility-website" class="accordion-collapse collapse" data-bs-parent="#why-website-faqs">
              <div class="accordion-body">
                A well-designed website with testimonials, customer reviews, and a professional appearance can instill trust and confidence in your brand, making potential customers more likely to choose your business over competitors.
              </div>
            </div>
          </div><!-- # Brand Credibility Website -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#customer-engagement-website">
                <i class="bi bi-plus question-icon"></i>
                How can a website help improve customer engagement and satisfaction?
              </button>
            </h3>
            <div id="customer-engagement-website" class="accordion-collapse collapse" data-bs-parent="#why-website-faqs">
              <div class="accordion-body">
                By providing valuable information, interactive features, and easy communication channels, a website can enhance customer engagement and satisfaction, leading to increased loyalty and repeat business.
              </div>
            </div>
          </div><!-- # Customer Engagement Website -->
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <?php include "includes/footer.php"; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>