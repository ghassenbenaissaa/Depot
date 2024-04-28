<?php
require_once('../config/connect.php');
include '../models/livraison.php';
$id1=$_POST['id1'];
    $id2=$_POST['id2'];
    $adresse1=$_POST['adresse1'];
    $adresse2=$_POST['adresse2'];
    $message=$_POST['message'];
$livraison=new clients();
$livraison->add_livraison();

header("location: ../email_livraison/send.php?id1=$id1&id2=$id2&adresse1=$adresse1&adresse2=$adresse2&message=$message");
   
  ?>