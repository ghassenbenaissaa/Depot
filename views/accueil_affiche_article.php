<?php 
//rester connecter
session_start();
include '../config/connect.php';
if (isset($_SESSION['IDD']) && isset($_SESSION['nom'])) { 
  //sauvegardé les donneés de client
  $ID =$_GET['id'];
  $reponse = $db->query("SELECT * FROM articles where id_ar=$ID ");
  while ($donnees = $reponse->fetch())
  {
      $id_ar=$donnees['id_ar'];
    $id_ar=$donnees['id_ar'];
    $nom_ar=$donnees['nom_ar'];
    $valeur_ar=$donnees['valeur_ar'];
    $categorie_ar=$donnees['categorie_ar'];
    $quantite_ar=$donnees['quantite_ar'];
    $description_ar=$donnees['description_ar'];
    $etat_ar=$donnees['etat_ar'];
    $dda_ar=$donnees['dda_ar'];
    $id_client=$donnees['id_client'];
  }   
  $reponse = $db->query("SELECT * FROM clients where id_client=$id_client");
  while ($donnees = $reponse->fetch())
      {
    $nom=$donnees['nom'];
    $prenom=$donnees['prenom'];
    $email=$donnees['email'];
    $adresse=$donnees['adresse'];
    $telephone=$donnees['telephone'];
  }   

    ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dépot</title>
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

      <h1 class="logo me-auto me-lg-0"><a href="accueil_connecter.php"><img  src="../forms/accueil/img/logo.png"  height="900px" alt="Depot"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="../forms/accueil/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Service</a></li>
          <li><a class="nav-link scrollto" href="index.php#eco">Offres</a></li>
          <li class="dropdown"><a href="index.php#categorie"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a class="nav-link scrollto" href="index.php#article">Articles</a></li>
          <li><a class="nav-link scrollto" href="index.php#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Se connecter</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section>
  </section>
    <!-- ======= Point d'eco ======= -->
    <section id="eco" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../forms/accueil/img/img0.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $nom_ar; ?></h3>
            <p class="fst-italic">
            <?php echo $description_ar; ?>
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Valeur: <?php echo $valeur_ar; ?>DT</li>
              <li><i class="bi bi-check-circle"></i> Quantité: <?php echo $quantite_ar; ?></li>
              <li><i class="bi bi-check-circle"></i> Etat: <?php echo $etat_ar; ?></li>
              <li><i class="bi bi-check-circle"></i> Date de l'achat d'article: <?php echo $dda_ar; ?></li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Coordonnées de propriétaire</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Nom: <?php echo $nom; ?></li>
              <li><i class="bi bi-check-circle"></i> Prenom: <?php echo $prenom; ?></li>
              <li><i class="bi bi-check-circle"></i> Email: <?php echo $email; ?></li>
              <li><i class="bi bi-check-circle"></i> Adresse: <?php echo $adresse; ?></li>
              <li><i class="bi bi-check-circle"></i> Téléphone: <?php echo $telephone; ?></li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- point d'eco -->
<!-- les annonces section ends -->

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
<script>  
 $(document).ready(function(){  
      $('#prt_data').DataTable();  
 });  
 </script>  
 <?php
}else {
     header("location:se_connecter.php");
     exit();
}

?>