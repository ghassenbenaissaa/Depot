<?php 
session_start();
require_once('../config/connect.php');
include '../models/livreurs.php';
$livreur=new livreurs();
$livreur->update_livreur_adress();
    
  header("location:../views/profil_livreur.php?error61=Votre adresse a été changé avec succès#information");

?>
