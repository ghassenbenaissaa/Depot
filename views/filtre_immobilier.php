<?php 
include '../config/connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dépot_acceuil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- favicon link  -->
     
  <link rel="icon" type="image/png" sizes="32x32" href="../forms/accueil/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../forms/accueil/img/favicon/favicon-16x16.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../forms/accueil/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/aos/aos.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../forms/accueil/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../forms/accueil/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="accueil.php"><img  src="../forms/accueil/img/logo.png"  height="900px" alt="Depot"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="../forms/accueil/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="accueil.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="accueil.php#services">Service</a></li>
          <li><a class="nav-link scrollto" href="accueil.php#eco">Offres</a></li>
          <li class="dropdown"><a href="accueil.php#categorie"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>    
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
          <li><a class="nav-link scrollto" href="accueil.php#article">Articles</a></li>
          <li><a class="nav-link scrollto" href="accueil.php#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="se_connecter.php" class="book-a-table-btn scrollto d-none d-lg-flex">Se connecter</a>

    </div>
  </header><!-- End Header -->

  

  <main id="main">
  </br>
            </br>
            </br>
            </br></br>
    
<!-- ======= Hero Section ======= -->
<section class="menu" id="article">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Nos articles</h2>
              <p>Les articles de type immobilier</p>
            </div>
          </div>  
    <?php 
    $reponse = $db->query("SELECT * FROM articles where categorie_ar='Immobilier' ");
    while ($donnees = $reponse->fetch())
          {
                $id_ar=$donnees['id_ar'];
                  $nom_ar=$donnees['nom_ar'];
                  $description_ar=$donnees['description_ar'];
                  $valeur_ar=$donnees['valeur_ar'];
                  ?> 
          <div class="box-container">   
              <div class="box">
                  <div class="image">
                      <img src="../forms/accueil/img/articles/2.jfif" alt="">
                  </div>
                  <div class="content">   
                      <h3><?php echo $nom_ar; ?></h3>
                      <p><?php echo $description_ar; ?></p>
                      <p>Valeur:<?php echo $valeur_ar; ?>dt</p> 
                      <a href="accueil_affiche_article.php?id=<?php echo $id_ar; ?>" class="btnn">Plus de détails</a>      
                  </div>
              </div>
          </div>
          <?php
    }   

   ?>
  </section><!-- End Hero -->
    <!-- ======= services ======= -->
    

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
              <a href="reclamation.html" class="book-a-table-btnnn scrollto d-none d-lg-flex" >Réclamer</a>
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
  <script src="../forms/accueil/vendor/aos/aos.js"></script>
  <script src="../forms/accueil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../forms/accueil/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../forms/accueil/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../forms/accueil/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../forms/accueil/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../forms/accueil/js/main.js"></script>

</body>

</html>
