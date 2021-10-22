<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Skills</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.6.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
#button .btn-portf {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 30px;
  color: #fff;
  background: #34b7a7;
}
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Bagoes</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="skills.php">Skills</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://www.linkedin.com/in/muhammad-bagoes-wicaksono-993482202/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="https://www.youtube.com/channel/UC5z8PLLdBo5NKvqN7KOnWQQ" class="twitter"><i class="bi bi-youtube"></i></a>
        <a href="https://www.facebook.com/MBagoesW" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/embagoeswe/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>


    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <?php
              $strSQL = "SELECT * FROM skills";
              $execStrSQL = mysqli_query($conn, $strSQL);
              $row = mysqli_fetch_assoc($execStrSQL)
           ?>
          
            <p>
            <?= $row["text"]; ?>
            </p>

           
        </div>

        <div class="row skills-content">

          <?php
              $strSQL = "SELECT * FROM skills";
              $execStrSQL = mysqli_query($conn, $strSQL);
              $row = mysqli_fetch_assoc($execStrSQL)
           ?>

          <div class="col-lg-6">

         
          
            <div class="progress">
              <span class="skill">Illustrator <i class="val"><?= $row["illustrator"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Figma <i class="val"><?= $row["figma"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val"><?= $row["photoshop"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Adobe Premier <i class="val"><?= $row["premier"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Blender<i class="val"><?= $row["blender"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">After Effect <i class="val"><?= $row["after"]; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
    
            <p class="d-flex flex-column align-items-center">
            <br>
            <?= $row["text2"]; ?>
            </p>
            <div id="button" class="container d-flex flex-column align-items-center">
            <a href="gallery.php" class="btn-portf">My Design</a>
            </div>
            <br>
        
          
        </div>

      </div>
    </section><!-- End Skills Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      &copy; Copyright <strong><span>Kelly</span></strong> and modified by <strong><span>Bagoes</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>