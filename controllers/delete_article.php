<?php
require_once('../config/connect.php');
include '../models/articles.php';
$article=new articles();
$article->delete_article();
        
  header('Location:../views/profil_client.php#annonce');