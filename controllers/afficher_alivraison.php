<?php
session_start();
include '../config/connect.php';
if (isset($_SESSION['IDD']) && isset($_SESSION['nom'])) {
  $ID=$_GET['id']; 
  $reponse = $db->query("SELECT * FROM alivraison where id_lis=$ID");
  while ($donnees = $reponse->fetch())
  {
      $id_lis=$donnees['id_lis'];
      $id1=$donnees['id1'];
      $id2=$donnees['id2'];
      $adresse1=$donnees['adresse1'];
      $adresse2=$donnees['adresse2'];
      $message=$donnees['message'];         
    }   

   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Depot-Mon Profil-Mes livraison</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../forms/profile/assets/img/favicon.png" rel="icon">
  <link href="../forms/profile/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../forms/profile/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../forms/profile/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../forms/profile/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../forms/profile/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../forms/profile/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../forms/profile/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../forms/profile/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../forms/profile/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?php echo $_SESSION['nom'] ?></a></h1>
       
      </div>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="../views/profil_livreur.php#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Mon profil</span></a></li>
          <li><a href="../views/profil_livreur.php#ajoutart" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Mes informations</span></a></li>
          <li><a href="../views/profil_livreur.php#annonce" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Mes annonces acceptées</span></a></li>
          <li><a href="../views/rec.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Réclamation</span></a></li>
          <li><a href="../Dépot_livreur/accueil.php" class="nav-link scrollto"><i class="bx bx-list-ul"></i> <span>Accueil</span></a></li>
          <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-power-off"></i> <span>Déconnexion</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Livraisons Details</h2>
          <ol>
            <li><a href="index.php">Mes livraisons</a></li>
            <li>Détaillé</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="annonce" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../forms/profile/assets/img/portfolio/portfolio-details-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../forms/profile/assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../forms/profile/assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Nom d'article</h3>
              <ul>
                <li><strong>ID de livraison</strong>: <?php echo $id_lis; ?></li>
                <li><strong>ID de premier article</strong>: <?php echo $id1; ?></li>
                <li><strong>ID de deuxieme article</strong>: <?php echo $id2; ?></li>
                <li><strong>la premiere adresse</strong>:<?php echo $adresse1; ?></li>
                <li><strong>la deuxieme adresse</strong>: <?php echo $adresse2; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
              <?php echo $message; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
  
    <!-- End information Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zénith</span></strong>
      </div>
     
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../forms/profile/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../forms/profile/assets/vendor/aos/aos.js"></script>
  <script src="../forms/profile/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../forms/profile/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../forms/profile/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../forms/profile/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../forms/profile/assets/vendor/typed.js/typed.min.js"></script>
  <script src="../forms/profile/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../forms/profile/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../forms/profile/assets/js/main.js"></script>

</body>

</html>
<script>  
 $(document).ready(function(){  
      $('#plant_data').DataTable();  
 });  
 </script>  
 <?php
}else {
     header("location: ../views/se_connecter.php");
     exit();
}

?>