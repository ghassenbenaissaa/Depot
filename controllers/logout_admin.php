<?php 
session_start();

session_unset();
session_destroy();

header("location: ../views/connect_admin.php")


?>