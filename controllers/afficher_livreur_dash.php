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
    <title>Dashboard_livreur</title>
    </head>


<body>

<!-- begin sidebar-->

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
        <li >
            <a href="afficher_client_dash.php">
            <i  class='bx bxs-group'></i>
            <span  class="text"><strong>Espace Client</strong></span>
            </a>
        </li>
        <li class="active">
            <a href="afficher_livreur_dash.php">
            <i class='bx bxs-truck'></i>
            <span class="text"><strong>Espace Livraison</strong></span>
            </a>
       </li>
       <li>
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
        <li>
            <a href="afficher_admine_dash.php">
                <i class='bx bxs-id-card'></i>
           <span class="text"><strong>Espace Administrateur</strong></span>
            </a>
       </li>
       <li >
            <a href="afficher_rec_dash.php">
                <i class='bx bxs-comment-detail'></i>
           <span class="text"><strong>Espace Reclamations</strong></span>
            </a>
       </li>
    

     </ul>
    <ul class="side-menu ">

    <li>
            <a href="../controllers/logout_admin.php" class="logout">
                <i class='bx bx-log-out'></i>
           <span class="text"><strong>Deconnexion</strong></span>
            </a>
        </li>
    </ul> 
</section>
<!-- end sidebar-->
<!-- end sidebar-->


<!-- contenu-->

<section id="content">
    
<!--begin navbar-->
<nav>
        <i class='bx bx-menu'></i>
    </nav>
    <!-- end navbar-->
<!-- Main-->
<main>
        <div class="head-title">
            <div class="left">
                 <h1>Espace Livraison</h1>

    <ul class="breadcrumb">
    <li>
    <a href="#">Dashboard</a>
    </li>
<li><i class='bx bx-chevron-right'></i></li>
<li>
    <a class="active" href="#">Espace Livraison</a>
</li>
</ul>
</div>


</div>


<div class="table-data">
<div class="order">
    <div class="head">
        <h3><u> Table des livreurs </u></h3>
        <i class='bx bx-filter'></i>
        <i class='bx bx-search-alt-2'></i>
    </div>
    <table>
        <thead>
<tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>date de naisssance</th>
    <th>email</th>
    <th>telephone</th>
    <th>sexe</th>
    <th>adresse</th>

    <th>cin</th>
    <th>tdv</th>
</tr>
<?php
 $reponse = $db->query("SELECT * FROM livreurs");
 while ($donnees = $reponse->fetch())
 { 
        $Id=$donnees['id_li'];
        $Nom=$donnees['nom_li'];
        $Prenom=$donnees['prenom_li'];
        $DateDeNaissance=$donnees['ddn_li'];
        $Email=$donnees['email_li'];
        $Telephone=$donnees['telephone_li'];
        $Sexe=$donnees['sexe_li'];
        $Adresse=$donnees['adresse_li'];

        $cin=$donnees['cin_li'];
        $tdv=$donnees['tdv_li'];

        echo '<tr>
        <th scope="row">'.$Id.'</th>
        <td>'.$Nom.'</td>
        <td>'.$Prenom.'</td>
        <td>'.$DateDeNaissance.'</td>
        <td>'.$Email.'</td>
        <td>'.$Telephone.'</td>
        <td>'.$Sexe.'</td>
        <td>'.$Adresse.'</td>

        <td>'.$cin.'</td>
        <td>'.$tdv.'</td>';?>
        <td> 
        <button class="btn btn-danger"><a onclick="return confirm('êtes-vous sûr de vouloir supprimer?');" href ="delete_dash_livreur.php?CIN=<?php echo $Id;?>" class ="text-light"><i class="bx bx-trash"></i></a></button>
        </td>
        </tr>
        <?php }?>
 </thead>
 <tbody>
 </tbody>
    </table>
</div>
</div>

</main>
<!-- Main-->
<!-- contenu-->
<section class="footer">
    <div class="box-container">  
    <h1 class="credit">created by <span>Zénith</span></h1>
    </div>
    </div>
    </section>

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

