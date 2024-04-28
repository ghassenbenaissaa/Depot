<?php
require_once('../config/connect.php');
include '../models/reclamations.php';
$admine=new reclamations();
$admine->delete_reclamation();
        
  header('Location:afficher_rec_dash.php');
  ?>