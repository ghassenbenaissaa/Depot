<?php
require_once('../config/connect.php');

include '../models/reclamations.php';
$reclamation=new reclamations();
$reclamation->add_reclamations();
header("location: ../views/reclamation_profil.php?error90=Votre reclamation a été envoyé");

  ?>