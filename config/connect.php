<?php

$dbname = "depot";
$username ="root";
$password ="root";
$servername ="localhost";

try{
$db= new PDO(
    "mysql:host=$servername;dbname=$dbname",$username,$password);
//echo "connexion etablie";
}
catch(PDOException $e){
echo " connexion failed!";
echo $e->getMessage();
}

?>
