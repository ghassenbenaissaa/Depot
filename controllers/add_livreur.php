<?php
require_once('../config/connect.php');
include '../models/livreurs.php';
$email=$_POST['adresse_email'];
$livreur=new livreurs();
$livreur->add_livreur();
    
  header("Location:../email/send_livreur.php?email=$email");
  ?>
