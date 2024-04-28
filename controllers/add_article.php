<?php
require_once('../config/connect.php');
include '../models/articles.php';
$article=new articles();
$article->addarticles();
$id=$_GET['id'];

            $db=config::getConnexion();
              $reponse = $db->query("SELECT * FROM clients where id_client='$id' ");
              while ($donnees = $reponse->fetch())
              {

                  $nom=$donnees['nom'];
                  $telephone=$donnees['telephone'];
                  $adresse=$donnees['adresse'];
                  $email=$donnees['email'];
                  $mdp=$donnees['mdp'];
                  $prenom=$donnees['prenom'];
                  $ddn=$donnees['ddn'];
                  $sexe=$donnees['sexe'];
                $point_carb=$donnees['point_carb'];
                }
              $point_c=$point_carb;
              $point_c++;
              $Rq = $db->prepare("update clients set nom='$nom',prenom='$prenom',ddn='$ddn',sexe='$sexe',email='$email',adresse='$adresse',mdp='$mdp',telephone='$telephone',image='',point_carb='$point_c' where id_client=$id");
              $Rq->execute();

        header("location: ../views/profil_client.php?error62=Votre article a été ajouté avec succès#ajoutart");
        exit();            
  ?>