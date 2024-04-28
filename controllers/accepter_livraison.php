<?php 
require_once('../config/connect.php');
include '../models/alivraison.php';
$alive=new alivraison();
$alive->add_alivraison();


header("Location:../views/accueil_livreur.php");
?>
