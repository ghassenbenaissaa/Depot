<?php
require_once('../config/connect.php');
include '../models/administrateurs.php';
$admine=new administrateurs();
$admine->delete_admine();
        
  header('Location:afficher_admine_dash.php');
  ?>