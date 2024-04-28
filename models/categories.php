<?php
class config{
    private static $db = NULL;

    public static function getConnexion(){
        if(!isset(self::$db))
        {
            try
            {
                self::$db = new PDO('mysql:host=localhost;dbname=depot','root','root',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                    );
                    
            }
            catch(Exception $e)
            {
                die('ERREUR: '. $e->getMessage());
            }
        }
        return self::$db;
    }
}
class categories
{
    public string $id_c;
    public string $nom_c;



    function add_categories()
   {
    try{
    $db=config::getConnexion();
    if (isset($_POST ['nom_c'])){
        $nom_c=$_POST['nom_c'];
        
        $Rq = $db->prepare('INSERT INTO `categories` (nom_c) VALUES(?) ');
        $Rq->execute([$nom_c]);
        if ($Rq)
        {
                header("location:afficher_cate_dash.php");
        }  
        }
    }
    catch(Exception $e)
    {
        die('ERREUR: '. $e->getMessage());
    }
    } 
    function delete_categories()
    {
        try{
     $db=config::getConnexion();
     $id_c=$_GET['id_c'];
     if(isset($_GET['id_c'])){
       $reponse = $db->query("DELETE FROM categories where id_c='$id_c' ");
     }
    }
    catch(Exception $e)
    {
        die('ERREUR: '. $e->getMessage());
    }  
     } 
     function update_categories()
    {
        try{
     $db=config::getConnexion();
     $id_c=$_GET['id_c'];
     if (isset($_POST ['nom_c'])){
        $nom_c=$_POST['nom_c'];
          $Rq = $db->prepare("update `categories` set nom_c='$nom_c' where id_c='$id_c'");
          $Rq->execute();
          if ($Rq)
            {
                header("location:afficher_cate_dash.php");
        }  
        }
    }
    catch(Exception $e)
    {
        die('ERREUR: '. $e->getMessage());
    } 
     } 
     

}



?>