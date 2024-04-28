<?php
include('../config/connect.php');    

session_start(); 
include '../config/connect.php';
if (isset($_SESSION['IDD']) && isset($_SESSION['nom'])) {  //idha m3abyin
  //sauvegardé les donneés de client
  $ID =$_SESSION['IDD'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../forms/dashboard/style.css">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
<title>Dashboard_admin_ajout</title>
</head>
<body>
    
<section id="sidebar">
    <a href="dasha.php" class="brand">
      <i class='bx bxs-user'></i>
      <span class="text">DASHMIN</span>
    </a>
    <ul class="side-menu top">
        <li >
             <a href="../views/dasha.php">
            <i class='bx bxs-dashboard'></i>
            <span class="text"><strong> Dashboard </strong> </span>
             </a>
        </li>
    
        <li>
            <a href="afficher_client_dash.php">
    
                <i  class='bx bxs-group'></i>
                 <span  class="text"><strong>Espace Client</strong></span>
            </a>
        </li>
    
        <li>
            <a href="afficher_livreur_dash.php">
                <i class='bx bxs-truck'></i>
           <span class="text"><strong>Espace Livraison</strong></span>
            </a>
       </li>
    
       <li >
        <a href="afficher_articles_dash.php">
            <i class='bx bxs-package'></i>
       <span class="text"><strong>Espace Dépôt</strong></span>
        </a>
    </li>
    <li>
            <a href="afficher_cate_dash.php">
                <i class='bx bxs-category'></i>
           <span class="text"><strong>Espace Categorie</strong></span>
            </a>
       </li>
    <li class="active">
            <a href="afficher_admine_dash.php">
                <i class='bx bxs-id-card'></i>
           <span class="text"><strong>Espace Administrateur</strong></span>
            </a>
       </li>
    
    
    
    
    </ul>
    
    <ul class="side-menu ">

        
        <li>
            <a href="#" class="logout">
                <i class='bx bx-log-out'></i>
           <span class="text"><strong>Deconnexion</strong></span>
            </a>
        </li>
    </ul>
    
    </section>


<!-- end sidebar-->


<!-- contenu-->

<section id="content">
    
<!--begin navbar-->
    <nav>
        <i class='bx bx-menu'></i>
<form>
    <div class="form-input">
<input type="search" placeholder="Search ...">
<button type="submit" class="search-btn"><i class='bx bx-search-alt-2'></i></button>
    </div>
</form>
     
        <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">1</span>
    </a>
    <a href="#" class="profile">
        <img src="img/ghada11.jpg" alt="ghada">
    </a>
    </nav>
    <!-- end navbar-->
<!-- Main-->
<main>
        <div class="head-title">
            <div class="left">
                 <h1>Espace Admin</h1>

    <ul class="breadcrumb">
    <li>
    <a href="#">Dashboard</a>
    </li>
<li><i class='bx bx-chevron-right'></i></li>
<li>
    <a class="active" href="#">Inscription Admin</a>
</li>
</ul>
</div>


</div>

<?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

<form name="formulaire"  method="POST" >
        <table > 
    

            <tr>
                
                <td>  <label  class="mb-0" for="email_ad"> email_ad </label>   </td>
                <td>
                <input class="form-control form-control-lg" type="email" id="email_ad"  name="email_ad"/>
            </td>
            </tr>

            <tr>
                <td> <label  class="mb-0" for="nom_ad"> nom_ad  </label>  </td>
                <td> 
                <input class="form-control form-control-lg" type="text" id="nom_ad" name="nom_ad"  />
            </td>
            </tr>


            <tr>
                <td> <label  class="mb-0" for="mdp_ad"> mdp_ad </label>  </td>
                <td> 
                <input class="form-control form-control-lg" type="password" id="mdp_ad" name="mdp_ad" />
            </td>
            </tr>

        
            <tr>
                <td> </td>
                <td> 
                <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                   <button class="btn btn-primary my -S" type="submit" name ="submit">envoyer</button>
</div>
                </td>
            </tr>

        </table>  
       
    </form> 
<?php include '../models/administrateurs.php';
$admine=new administrateurs();
$admine->add_admine();
?>
</div>
</div>
</main>

<section class="footer">
    <div class="box-container">
 
    <h1 class="credit">created by <span>Zénith</span></h1>
    </div>
    </div>
    </section>
 <!--
<section class="footer">
    <p>
    <h3 > all rights reserved !!</h3>
</p>
</section> -->

<!-- charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<!-- inclure js -->
<script src="../forms/dashboard/script.js"></script>
</body>
</html>
<script>  
 $(document).ready(function(){  //code te3k mymchi kn ma doc 7dher bch ynjm yaaml l execution wla mzel
      $('#plant_data').DataTable(); // 
 });

 </script>  
 <?php
}
else {//idha session mhich m3bya
     header("location: connect_admin.php");
     exit();
}
?>

