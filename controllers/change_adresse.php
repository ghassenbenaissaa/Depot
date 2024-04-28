<?php 
session_start();
require_once('../config/connect.php');
include '../models/clients.php';
$client=new clients();
$client->update_client_adress();
        
header("location:../views/profil_client.php?error61=Votre adresse a été changé avec succès#information");

?>
