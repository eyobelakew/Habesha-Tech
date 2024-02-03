  <?php
$currentFile = __FILE__;
$currentFileName = basename($currentFile);


?>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" <?php if ($currentFileName = "index.php") { echo 'class="active"'; } ?>>Home</a></li>
          <li><a href="about-us.php"<?php if ($currentFileName = "about-us.php") { echo 'class="active"'; } ?>>About us</a></li>
          <li><a href="services.php"<?php if ($currentFileName = "services.php") { echo 'class="active"'; } ?>>Services</a></li>
          <li><a href="portfolio.php"<?php if ($currentFileName = "portfolio.php") { echo 'class="active"'; } ?>>Portfolio</a></li>
          <li><a href="team.php"<?php if ($currentFileName = "team.php") { echo 'class="active"'; } ?>>Team</a></li>
          <li><a href="contact-us.php"<?php if ($currentFileName = "contact-us.php") { echo 'class="active"'; } ?>>Contact</a></li>
          <li><a href="faq.php"<?php if ($currentFileName = "faq.php") { echo 'class="active"'; } ?>>FAQ</a></li>
        </ul>
      </nav>
    </div>
  </header>