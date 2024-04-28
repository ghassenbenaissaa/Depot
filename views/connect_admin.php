<?php
session_start();
include "../config/connect.php";
if (isset($_POST['email_ad'])&& isset($_POST['mdp'])) {
	function validate($data){
		$data = trim($data); //tna7i les espace fonction predf
		$data = stripslashes($data);//tna7i antislashe
		$data = htmlspecialchars($data);//tbadel les caracteres special lel code html 
		return $data;
	}
$email = validate($_POST['email_ad']);
$password = validate($_POST['mdp']);
if (empty($email)) {
	header("location: ../views/connect_admin.php?error=Verifier votre email ou mot de passe55");
	exit();

 }else if(empty($password)) {
	header("location: ../views/connect_admin.php?error=Verifier votre email ou mot de passe66");
	exit();

 }else{
         $query = "SELECT * FROM administrateurs WHERE email_ad = :email_ad";  
         $statement = $db->prepare($query);  
         $statement->execute(array('email_ad'=>$_POST["email_ad"],)  );  
         $count = $statement->rowCount();

         
         if(($count > 0)) {
                $_SESSION["email"] = $_POST["email_ad"]; 
                $reponse = $db->query("SELECT id_ad FROM administrateurs where email_ad = '$email' ");
                while ($donnees = $reponse->fetch())
                {
                    $_SESSION["IDD"] = $donnees['id_ad'];
                }
                $reponse1 = $db->query("SELECT nom_ad FROM administrateurs where email_ad = '$email' ");
                while ($donnees1 = $reponse1->fetch())
                {
                    $_SESSION["nom"] = $donnees1['nom_ad'];
                } 
              header("location: ../views/dasha.php");  
         }  
            else{
                header("location: ../views/connect_admin.php?error=Verifier votre email ou mot de passe77");
                exit();
                }
         }   
        }


	?>


<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Connecte_admin_dashbord</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- css -->
    <link rel="stylesheet" href="../forms//conn_admin/style.css">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>


<body>

<!-- begin sidebar-->

<section id="sidebar">
    
    <div href="Dashboard.html" id="login-form-wrap">
      <h2>#DASHMIN</h2>
      <form id="login-form" method="POST">
        <p>
        <input type="email" id="email_ad" name="email_ad" placeholder="Email" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
        <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
        <input type="submit" id="login" value="Se Connecter">
        </p>
      </form>
      
      <div id="create-account-wrap">
        <!--
        <p>Not a member? <a href="#">Create Account</a><p>-->
      </div><!--create-account-wrap-->
    </div><!--login-form-wrap-->
    <!-- partial -->
    
</body>  
</html>





  