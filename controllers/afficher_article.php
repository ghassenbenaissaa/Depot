<?php
session_start();
include '../config/connect.php';
if (isset($_SESSION['IDD']) && isset($_SESSION['nom'])) {
  $ID=$_GET['id'];
  $reponse = $db->query("SELECT * FROM articles where id_ar=$ID ");
  while ($donnees = $reponse->fetch())
  {
      $id=$donnees['id_client'];
      $id_ar=$donnees['id_ar'];
      $nom_ar=$donnees['nom_ar'];
      $valeur_ar=$donnees['valeur_ar'];
      $categorie_ar=$donnees['categorie_ar'];
      $quantite_ar=$donnees['quantite_ar'];
      $description_ar=$donnees['description_ar'];
      $etat_ar=$donnees['etat_ar'];  
      $dda_ar=$donnees['dda_ar'];           
    }   
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Depot-Mon Profil-Mes articles</title>
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
        <h1 class="text-light"><a href="profil_client.php"><?php echo $_SESSION['nom']?></a></h1>
       
      </div>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="../views/profil_client.php#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Mon profil</span></a></li>
          <li><a href="../views/profil_client.php#ajoutart" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Mes informations</span></a></li>
          <li><a href="../views/profil_client.php#ajoutart" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Ajouter un article</span></a></li>
          <li><a href="../views/profil_client.php#annonce" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Mes annonces</span></a></li>
          <li><a href="../views/profil_client.php#livraison" class="nav-link scrollto"><i class="bx bxs-truck"></i> <span>Demande de livraison</span></a></li>
          <li><a href="../views/rec.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Réclamation</span></a></li>
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
          <h2>Annonces Details</h2>
          <ol>
            <li><a href="profil_client.php">Mes annonces</a></li>
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
                <li><strong>ID</strong>: <?php echo $id_ar; ?></li>
                <li><strong>Nom</strong>: <?php echo $nom_ar; ?></li>
                <li><strong>Valeur</strong>: <?php echo $valeur_ar; ?></li>
                <li><strong>Categorie</strong>: <?php echo $categorie_ar; ?></li>
                <li><strong>Quantité</strong>: <?php echo $quantite_ar; ?></li>
                <li><strong>Etat d'achat d'article</strong>: <?php echo $dda_ar; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>
              <?php echo $description_ar; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
  
    <!-- ======= modifier article Section ======= -->
    <section id="annonce" class="contact">
      <div class="container align-items-center">

        <div class="section-title">
          <h2>Modifier cet article</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="change_article.php?id=<?php echo $id_ar; ?>" method="post" role="form" class="mm">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nom de l'article</label>
                  <input type="text" name="Nom_ar" class="form-control" id="Nom_ar" required  onchange="errorValidation2()" value="<?php echo $nom_ar; ?>">
                  <p id="error2"></p>  
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Valeur de l'article</label>
                  <input type="number" class="form-control" name="Valeur_ar" id="Valeur_ar" required value="<?php echo $valeur_ar; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="name">Categorie</label>
                <input type="text" class="form-control" name="Catégorie_ar" id="Catégorie_ar" placeholder="Meuble/Vetement/Livre/Accessoire/Immobilie/Multimedia/Jardin/Loisir/Transport" required onchange="categorie()" value="<?php echo $categorie_ar; ?>">
                <p id="error5"></p> 
              </div>
              <div class="form-group">
                <label for="name">Quantité</label>
                <input type="number" class="form-control" name="Quantité_ar" id="Quantité_ar" required value="<?php echo $quantite_ar; ?>">
              </div>
              <div class="form-group">
                <label for="name">Etat de l'article</label>
                <input type="text" class="form-control" name="Etat_ar" id="Etat_ar" placeholder="Neuf avec étiquettes/Neuf sans emballage/Neuf avec défauts/Occasion" required onchange="etat()" value="<?php echo $etat_ar; ?>">
                <p id="error6"></p> 
              </div>
              <div class="form-group">
                <label for="name">Date de l'achat d'article</label>
                <input type="date" class="form-control" name="Date_ar" id="Date_ar" required value="<?php echo $dda_ar; ?>">
              </div>
              <div class="form-group">
                <label for="name">Image</label>
                <input type="text" class="form-control" name="subject" id="subject" >
              </div>
              <div class="form-group">
                <label for="name">Description</label>
                <textarea class="form-control" name="Description_ar" id="Description_ar" rows="10" required value="<?php echo $description_ar; ?>"></textarea>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- fin modifier article Section -->
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
  <script src ="../forms/js/ajouter_article.js"></script>
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
     header("location: ../Dépot_se_connecter/se_connecter.html");
     exit();
}

?>