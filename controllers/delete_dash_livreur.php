<?php
include('../config/connect.php');
include '../models/livreurs.php';
$livreur=new livreurs();
$livreur->delet_livreur();
  header('Location:afficher_livreur_dash.php');