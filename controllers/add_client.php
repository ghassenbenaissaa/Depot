<?php
require_once('../config/connect.php');
include '../models/clients.php';

$email=$_POST['email'];
$client=new clients();
$client->add_client();

?>