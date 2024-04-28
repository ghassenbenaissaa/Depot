<?php 
//rester connecter
session_start();
include '../config/connect.php';
include '../models/articles.php';
if (isset($_SESSION['IDD']) && isset($_SESSION['nom'])) { 
  //sauvegardé les donneés de client
  $ID =$_SESSION['IDD'];
  $reponse = $db->query("SELECT * FROM clients where id_client = '$ID' ");
  while ($donnees = $reponse->fetch())
  {
      $id=$donnees['id_client'];
      $nom=$donnees['nom'];
      $telephone=$donnees['telephone'];
      $adresse=$donnees['adresse'];
      $email=$donnees['email'];
      $mdp=$donnees['mdp'];
      $point_carb=$donnees['point_carb'];
      $image=$donnees['image'];

  } 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Depot-Mon Profil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- favicon link  -->
     
<link rel="icon" type="image/png" sizes="32x32" href="../forms/profile/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../forms/profile/assets/img/favicon/favicon-16x16.png">
<meta name="theme-color" content="#ffffff">
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
      <?php $img=  $image;
      $nom= $_SESSION['nom'];
      echo "
        <img src ='../controllers/images/$img' alt='' class='img-fluid rounded-circle'>
        <h1 class='text-light'><a href='profil_client.php'>$nom</a></h1>
      </div>";
?>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Mon profil</span></a></li>
          <li><a href="#information" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Mes informations</span></a></li>
          <li><a href="#ajoutart" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Ajouter un article</span></a></li>
          <li><a href="#annonce" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Mes annonces</span></a></li>
          <li><a href="#livraison" class="nav-link scrollto"><i class="bx bxs-truck"></i> <span>Demande de livraison</span></a></li>
          <li><a href="reclamation_profil.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Réclamation</span></a></li>
          <li><a href="accueil_connecter.php" class="nav-link scrollto"><i class="bx bx-list-ul"></i> <span>Accueil</span></a></li>
          <li><a href="../controllers/logout.php" class="nav-link scrollto"><i class="bx bx-power-off"></i> <span>Déconnexion</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Bienvenue</h1>
      <p><span class="typed" data-typed-items="<?php echo $_SESSION['nom'] ?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= infermation Section ======= -->
    <section  class="about">
      <div class="container">
        <div class="section-title">
          <h2>Mes informations</h2>
        </div>
        <div class="row" >
          <center>
          <div class="col-lg-6" >
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>ID:</strong> <span><?php echo $id?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Adresse mail:</strong> <span><?php echo $email?></span></li>
                </ul>
              </div>
              <div class="col-lg-6 ">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telephone:</strong> <span><?php echo $telephone?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>adresse:</strong> <span><?php echo $adresse?></span></li>
                </ul>
                </div>
                <div class="col-lg-6 ">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Point de carbonne:</strong> <span><?php echo $point_carb?></span></li>
                </ul>
              </div>
            </div>
          </div>
          </center>
        </div>
      </div>
      <!--modification de mot de passe-->
      <section id="information" class="contact" >
      <div class="container align-items-center">
        <div class="section-title">
          <h2>Modifier mon Mot de passe</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form  action="../controllers/change_mdp.php" name="change" method="post" role="form" class="mm" enctype="multipart/form-data" >
            <p style="color:#a54f1d;"><?php if( isset($_GET['error59'])){echo $_GET['error59'] ;}?></p>
              <div class="form-group">
                <label for="name">Ancien mot de passe </label>
                <input type="password" class="form-control" name="amdp" id="amdp" placeholder="Veuillez saisie votre ancien mot de passe" required>
              </div>
              <div class="form-group">
                <label for="name">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="nmdp" id="nmdp" placeholder="Veuillez saisir votre nouveau mot de passe" required onchange="confpass()">
                <p id="error0"></p>
              </div>

              <div class="form-group">
                <label for="name">Confirmer nouveau mot de passe</label>
                <input type="password" class="form-control" name="cnmdp" id="cnmdp" placeholder="Veuillez saisir votre nouveau mot de passe" required onchange="confpass2()">
                <p id="error7"></p>
              </div>
              <div class="text-center"><button name="submit" type="submit">Envoyer</button></div>
            </form>
          </div>
        </div>
      </div>
            <!--modification de l'image-->
      <div class="container align-items-center">
        <div class="section-title">
          <h2>Modifier mon Image</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="mm">
            <p style="color:#a54f1d;"><?php if( isset($_GET['error60'])){echo $_GET['error60'] ;}?></p>
              <div class="form-group">
                <label for="name">Image</label>
                <input class="form-control" type="file"
                name="subject" id="subject" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre image a été changé avec succès!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit1">Envoyer</button></div>
            </form>
          </div>
        </div>
      </div>
       <!--modification d'adresse-->
      <div class="container align-items-center">
        <div class="section-title">
          <h2>Modifier mon Adresse</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="../controllers/change_adresse.php" method="post" role="form" class="mm" >
            <p style="color:#a54f1d;"><?php if( isset($_GET['error61'])){echo $_GET['error61'] ;}?></p>
              <div class="form-group">
                <label for="name">Nouvelle adresse</label>
                <input type="text" class="form-control" name="nadresse" id="nadresse" required  value="<?php echo $adresse; ?>">
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre image a été changé avec succès!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Envoyer</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End information Section -->

    <!-- ======= ajouter article Section ======= -->
    <section id="ajoutart" class="contact">
      <div class="container align-items-center">

        <div class="section-title">
          <h2>Ajouter un article</h2>
          <p>Vous pouvez déposer vos articles suite a ce formulaire.</p>
        </div>
        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="../controllers/add_article.php?id=<?php echo $ID; ?>" method="post" role="form" class="mm">
          <p style="color:#a54f1d;"><?php if( isset($_GET['error62'])){echo $_GET['error62'] ;}?></p>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nom de l'article</label>
                  <input type="text" name="Nom_ar" class="form-control" id="Nom_ar" required  onchange="errorValidation2()">
                  <p id="error2"></p>  
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Valeur de l'article</label>
                  <input type="number" class="form-control" name="Valeur_ar" id="Valeur_ar" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Categorie</label>
                <input type="text" class="form-control" name="Catégorie_ar" id="Catégorie_ar" placeholder="Meuble/Vetement/Livre/Accessoire/Immobilie/Multimedia/Jardin/Loisir/Transport" required onchange="categorie()">
                <p id="error5"></p> 
              </div>
              <div class="form-group">
                <label for="name">Quantité</label>
                <input type="number" class="form-control" name="Quantité_ar" id="Quantité_ar" required>
              </div>

              <div class="form-group">
                <label for="name">Etat de l'article</label>
                <input type="text" class="form-control" name="Etat_ar" id="Etat_ar" placeholder="Neuf avec étiquettes/Neuf sans emballage/Neuf avec défauts/Occasion" required onchange="etat()">
                <p id="error6"></p> 
              </div>
              <div class="form-group">
                <label for="name">Date de l'achat d'article</label>
                <input type="date" class="form-control" name="Date_ar" id="Date_ar" required>
              </div>
              <div class="form-group">
              <label for="name">Image</label>
              <input class="form-control" type="file"
                name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Description</label>
                <textarea class="form-control" name="Description_ar" id="Description_ar" rows="10" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>
        
      </div>
    </section><!-- fin ajouter article Section -->

     <!-- ======= mes annonce Section ======= -->
     <section id="annonce" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Mes annonces</h2>      
        </div>
        <?php
          $reponse1 = $db->query("SELECT * FROM articles where id_client='$ID' ");
          while ($donnees1 = $reponse1->fetch())
          {
              $id_ar=$donnees1['id_ar'];   ?>
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../forms/profile/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
              <a >ID:<?php echo $id_ar; ?></a>
                <a href="../controllers/afficher_article.php?id=<?php echo $id_ar; ?>" title="More Details"><i class="bx bx-link"></i></a>
                <a onclick="return confirm('êtes-vous sûr de vouloir supprimer?');"href="../controllers/delete_article.php?id=<?php echo $id_ar; ?>"><i class="bx bx-trash"></i></a>
              </div>
            </div>
          </div>
        </div>
            
        <?php
          }  ?>

      </div>
    </section><!-- End mes annonces Section -->

    <!-- ======= demande de livraison Section ======= -->
    <section id="livraison" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Demande de livraison</h2>
          <p>Si vous n'avez pas des solutions pour livrer vos articles on vous offre la solution</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-in">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="../controllers/add_demande_livraison.php" method="post" role="form" class="mm">
            <p style="color:#a54f1d;"><?php if( isset($_GET['error63'])){echo $_GET['error63'] ;}?></p>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">ID de premier article</label>
                  <input type="text" name="id1" class="form-control" id="id1" placeholder="Saisie l'ID de votre article" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">ID de deuxieme article</label>
                  <input type="text" name="id2" class="form-control" id="id2" placeholder="Saisie l'ID de l'article a changer" onchange="confid()" required>
                  <p id="error51"></p>  
                </div>
              <div class="form-group">
                <label for="name">Premier adresse</label>
                <input type="text" class="form-control" name="adresse1" id="adresse1" placeholder="Votre adresse" required>
              </div>
              <div class="form-group">
                <label for="name">Deuxieme adresse</label>
                <input type="text" class="form-control" name="adresse2" id="adresse2" placeholder="L'adresse de lotre client"  onchange="confadresse()" required>
                <p id="error52"></p>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" id="message" rows="10" placeholder="Si vous avez des details a mentionner" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- demande de livraison Section -->   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zénith</span></strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src ="../forms/js/ajouter_article.js"></script> 
  <script src ="../forms/js/demande_de_livraison.js"></script> 
  <script src ="../forms/js/mdp.js"></script> 
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
      $('#prt_data').DataTable();  
 });  
 </script>  
 <?php
}else {
     header("location: se_connecter.php");
     exit();
}

?>