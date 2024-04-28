<?php
require_once('../config/connect.php');
include '../models/clients.php';
$client=new clients();
$client->delete_client();

header('Location:afficher_client_dash.php');
    



