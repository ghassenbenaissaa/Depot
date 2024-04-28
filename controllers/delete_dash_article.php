<?php
require_once('../config/connect.php');
include '../models/articles.php';
$article=new articles();
$article->delete_article_dash(); 
  header('Location:afficher_articles_dash.php');
  ?>