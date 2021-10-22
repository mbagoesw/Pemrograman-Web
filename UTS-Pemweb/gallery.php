<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
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
#button .btn-contact {
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
          <li><a href="skills.php">Skills</a></li>
          <li><a class="active" href="Gallery.php">Gallery</a></li>
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <?php
              $strSQL = "SELECT * FROM gallery";
              $execStrSQL = mysqli_query($conn, $strSQL);
              $row = mysqli_fetch_assoc($execStrSQL)
           ?>
      
          <p><?= $row["text2"]; ?></p>
        
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Digital">Digital Art</li>
              <li data-filter=".filter-Vector">Vector Art</li>
              <li data-filter=".filter-Logo">Logo</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Digital">
            <div class="portfolio-wrap">
              <img src= <?= $row["photo1"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Soeguss</h4>
                <p>Digital Art</p>
                <div class="portfolio-links">
                  <a href= <?= $row["photo1"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Soeguss"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vector">
            <div class="portfolio-wrap">
              <img src= <?= $row["photo2"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Snorlax</h4>
                <p>Vector Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo2"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Snorlax"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Logo">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo3"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Violo</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo3"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Violo"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vector">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo4"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Beach</h4>
                <p>Vector Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo4"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Beach"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Digital">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo5"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mochi</h4>
                <p>Digital Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo5"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mochi"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Digital">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo6"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pochi</h4>
                <p>Digital Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo6"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pochi"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Digital">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo7"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mogucat</h4>
                <p>Digital Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo7"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mogucat"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Digital">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo8"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Taro</h4>
                <p>Digital Art</p>
                <div class="portfolio-links">
                  <a href="<?= $row["photo8"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Taro"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vector">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo9"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sahara</h4>
                <p>Vector Art</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo9"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sahara"><i class="bx bx-plus"></i></a>    
              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Logo">
            <div class="portfolio-wrap">
              <img src=<?= $row["photo10"]; ?> class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Worklance</h4>
                <p>Logo</p>
                <div class="portfolio-links">
                  <a href=<?= $row["photo10"]; ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title="Worklance"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>

            <br>
            <p class="d-flex flex-column align-items-center align-self-end">
            <br>
            <?= $row["text"]; ?>
            </p>
            <div id="button" class="container d-flex flex-column align-items-center align-self-end">
            <a href="contact.php" class="btn-contact">CONTACT ME</a>
            </div>
            <br>
        
          
        

      </div>
    </section><!-- End Portfolio Section -->

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