<?php 
session_start();
include '../models/clients.php';
$client=new clients();
$client->update_client_mdp();

header("location:../views/profil_client.php?error59=Votre mot de passe a été changé avec succès#information");

?>
