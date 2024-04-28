<?php
require_once('../config/connect.php');
session_start();
include '../models/articles.php';
$article=new articles();
$article->update_article();
    header("location:../views/profil_client.php#annonce");
    
  ?>