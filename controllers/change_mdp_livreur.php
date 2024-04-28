<?php 
session_start();
require_once('../config/connect.php');
include '../models/livreurs.php';
$livreur=new livreurs();
$livreur->update_livreur_mdp();
    
header("location:../views/profil_livreur.php?error59=Votre mot de passe a été changé avec succès#information");
?>
