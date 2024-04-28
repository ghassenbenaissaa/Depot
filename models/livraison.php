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
class clients
{
    public string $id_lis;
    public string $id1;
    public string $id2;
    public string $adresse1; 
    public string $adresse2;
    public string $message;


    function add_livraison()
   {
    try{
    $db=config::getConnexion();
    $id1=$_POST['id1'];
    $id2=$_POST['id2'];
    $adresse1=$_POST['adresse1'];
    $adresse2=$_POST['adresse2'];
    $message=$_POST['message'];

    $Rq = $db->prepare('INSERT INTO `livraison` (`id1`, `id2`, `adresse1`, `adresse2`, `message`) VALUES(?,?,?,?,?) ');
    $Rq->execute([$id1,$id2,$adresse1,$adresse2,$message]);
}
catch(Exception $e)
{
    die('ERREUR: '. $e->getMessage());
}
    } 

}



?>