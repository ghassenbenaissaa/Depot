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
class administrateurs
{
    public string $id_ad;
    public string $email_ad;
    public string $nom_ad;
    public string $mdp_ad; 



    function add_admine()
    {
      try{
        $db=config::getConnexion();
        if (isset($_POST ['email_ad']) && isset($_POST ['nom_ad']) && isset($_POST ['mdp_ad']) ){
            $email_ad=$_POST['email_ad'];
            $nom_ad=$_POST['nom_ad'];
            $mdp_ad=$_POST['mdp_ad'];
            
            $Rq = $db->prepare('INSERT INTO `administrateurs` (email_ad,nom_ad,mdp_ad) VALUES(?,?,?) ');
            $Rq->execute([$email_ad,$nom_ad,$mdp_ad]);
            if ($Rq)
            {
                    header("location:afficher_admine_dash.php");
                    exit();
            }  
            }
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
}


function delete_admine()
{
    try{
    $db=config::getConnexion();
    $id_ad=$_GET['id_ad'];
    if(isset($_GET['id_ad'])){
      $reponse = $db->query("DELETE FROM administrateurs where id_ad='$id_ad' ");
    }
}catch(PDOException $e)  {
    
    $e->getMessage();
}     

}

function update_admine()
{
    try{
    $db=config::getConnexion();
    $id_ad=$_GET['id_ad'];
    if (isset($_POST ['email_ad']) && isset($_POST ['nom_ad']) && isset($_POST ['mdp_ad']) ){
        $email_ad=$_POST['email_ad'];
        $nom_ad=$_POST['nom_ad'];
        $mdp_ad=$_POST['mdp_ad'];
      $Rq = $db->prepare("update `administrateurs` set email_ad='$email_ad', nom_ad='$nom_ad', mdp_ad='$mdp_ad' where id_ad='$id_ad'");
      $Rq->execute();
      if ($Rq)
      {
        header("location:afficher_admine_dash.php");
              exit();
      }

    }

}catch(PDOException $e)  {
    
    $e->getMessage();
}
}
}



?>