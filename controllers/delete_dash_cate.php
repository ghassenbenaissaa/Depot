<?php
require_once('../config/connect.php');
include '../models/categories.php';
$cate=new categories();
$cate->delete_categories();
           
  header('Location:afficher_cate_dash.php');
  ?>