<?php 
include '../config/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dépot-Se-connecter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- favicon link  --> 
  <link rel="icon" type="image/png" sizes="32x32" href="../forms/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../forms/assets/img/favicon/favicon-16x16.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../forms/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../forms/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../forms/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../forms/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../forms/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../forms/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../forms/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../forms/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="accueil.php"><img  src="../forms/assets/img/logo.png"  height="900px" alt="Depot"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="acceuil.php#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="acceuil.php#services">Service</a></li>
          <li><a class="nav-link scrollto" href="acceuil.php#eco">Offres</a></li>
          <li class="dropdown"><a href="acceuil.php#categorie"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <?php
            $rq = $db->query("SELECT * FROM categories");
            while ($cat = $rq->fetch())
            {
            $nom_c=$cat['nom_c'];?>
            <li><a href="filtre_<?php echo $nom_c ?>.php"><?php echo $nom_c;?></a></li>
            <?php }?>             
            </ul>  
          </li>
          <li><a class="nav-link scrollto" href="acceuil.php#article">Articles</a></li>
          <li><a class="nav-link scrollto" href="acceuil.php#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="se_connecter.php" class="book-a-table-btn scrollto d-none d-lg-flex ">Se connecter</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section > 
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Se connecter</h2>
          <p>Joigner-nous</p>
        </div>
        
        <form action="../controllers/connect_all.php" method="POST" class="conn">
          <div class="row">
          <div class="section-title text-center">
            <h2 style="color:#cda45e;"><?php if( isset($_GET['mail'])){echo $_GET['mail'] ;} ?></h2>
          </div>
          <div class="section-title text-center">
            <h2 style="color:#cda45e;"><?php if( isset($_GET['secc'])){echo $_GET['secc'] ;} ?></h2>
          </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" required placeholder="Adresse email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="mdp" id="mdp" required autocomplete="off" placeholder="Mot de passe">
              <div class="validate"></div>
            </div>
          </div>
          <br>
          <div class="section-title text-center">
          <a href="mdp_oublier.php" class="section-title ">Mot de passe oublié?</a>
          <br>
          <br>
            <h2>Si vous n'êtes pas parmi nous vous pourrez l'être</h2>
            <a href="inscription.php" class="section-title ">Créer un compte</a>
          </div>
          <div class="section-title text-center">
            <h2 style="color:red;"><?php if( isset($_GET['error'])){echo $_GET['error'] ;} ?></h2>
          </div>
          <div class="text-center"><button type="submit" id="submit" name="submit">Se connecter</button></div>
        </form>
      </div>
    </section><!-- End Book A Table Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>DEPOT</h3>
              <p>
                18, rue de l'Usina- Zl Aéroport Charguia II <br>
                2035 Ariana<br><br>
                <strong>Phone:</strong> +216-52-400-300<br>
                <strong>Email:</strong> contact@depot.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Site web</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="accueil.php#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="accueil.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="accueil.php#eco">Offres</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="accueil.php#categorie">Categories</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="accueil.php#article">Articles</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Depot</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Livraison</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Echange</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Réclamation</h4>
            <p>Pour nous soumettre une insatisfaction relative à nos services</p>
              <a href="#reclamation.html" class="book-a-table-btnnn scrollto d-none d-lg-flex" >Réclamer</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zénith</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../forms/assets/vendor/aos/aos.js"></script>
  <script src="../forms/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../forms/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../forms/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../forms/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../forms/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../forms/assets/js/main.js"></script>

</body>

</html>
