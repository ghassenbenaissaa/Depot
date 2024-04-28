<?php
session_start();
include "../config/connect.php";
if (isset($_POST['email'])&& isset($_POST['mdp'])) {
	function validate($data){
		$data = trim($data); //tna7i les espace fonction predf
		$data = stripslashes($data);//tna7i antislashe
		$data = htmlspecialchars($data);//tbadel les caracteres special lel code html 
		return $data;
	}
$email = validate($_POST['email']);
$password = validate($_POST['mdp']);
if (empty($email)) {
	header("location: ../views/se_connecter.php?error=Verifier votre email ou mot de passe");
	exit();

 }else if(empty($password)) {
	header("location: ../views/se_connecter.php?error=Verifier votre email ou mot de passe");
	exit();

 }else{
         $query = "SELECT * FROM clients WHERE email = :email";  
         $statement = $db->prepare($query);  
         $statement->execute(  array(  'email'     =>     $_POST["email"],   )  );  
         $count = $statement->rowCount();
         while ($donnees = $statement->fetch())
        {$passCheck = password_verify($password,$donnees['mdp']);}
         //livreur
         $query1 = "SELECT * FROM livreurs WHERE email_li = :email_li ";  
         $statement1 = $db->prepare($query1);  
         $statement1->execute(  array(  'email_li'     =>     $_POST["email"],   )   );
         $count1 = $statement1->rowCount();
         while ($donnees = $statement1->fetch())
        { $passCheck1 = password_verify($password,$donnees['mdp_li']);} 
         //admine
         $query2 = "SELECT * FROM administrateurs WHERE email_ad = :email_ad ";  
         $statement2 = $db->prepare($query2);  
         $statement2->execute(  array(  'email_ad'     =>     $_POST["email"],  )  );  
         $count2 = $statement2->rowCount();
         while ($donnees = $statement2->fetch())
        {$passCheck2 = password_verify($password,$donnees['mdp_ad']);}
         if(($count > 0) && ($passCheck == true)) {
                $_SESSION["email"] = $_POST["email"]; 
                $reponse = $db->query("SELECT id_client FROM clients where email = '$email' ");
                while ($donnees = $reponse->fetch())
                {
                    $_SESSION["IDD"] = $donnees['id_client'];
                }
                $reponse1 = $db->query("SELECT nom FROM clients where email = '$email' ");
                while ($donnees1 = $reponse1->fetch())
                {
                    $_SESSION["nom"] = $donnees1['nom'];
                } 
              header("location: ../views/profil_client.php");  
         }  
         else if( ($count1 > 0) && ($passCheck1 == true)) {
         $reponse = $db->query("SELECT id_li FROM livreurs where email_li = '$email' ");
            while ($donnees = $reponse->fetch())
            {
                $_SESSION["IDD"] = $donnees['id_li'];
            }
            $reponse1 = $db->query("SELECT nom_li FROM livreurs where email_li = '$email' ");
            while ($donnees1 = $reponse1->fetch())
            {
                $_SESSION["nom"] = $donnees1['nom_li'];
            }
                $_SESSION["email"] = $_POST["email"]; 
              header("location: ../views/profil_livreur.php");  
         }  
        
         else if(($count2 > 0) && ($passCheck2 == true))  
         {  
                $_SESSION["email"] = $_POST["email"]; 
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
              header("location: ../views/profil_client.php"); 
            }
            else{
                header("location: ../views/se_connecter.php?error=Verifier votre email ou mot de passe");
                exit();
                }
         }   
        }
    else{
header("location: ../views/se_connecter.php?error=Verifier votre email ou mot de passe");
exit();
}

	?>