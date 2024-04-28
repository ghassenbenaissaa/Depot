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
class alivraison
{
    public string $id_alis;
    public string $id_lis;
    public string $id1;
    public string $id2; 
    public string $adresse1;
    public string $adresse2;
    public string $message; 



    function add_alivraison()
   {           try{
    $db=config::getConnexion();
    $ID=$_GET['id'];//tjib ml url
$reponse = $db->query("SELECT * FROM livraison  where id_lis=$ID");
while ($donnees = $reponse->fetch())
{
$id=$donnees['id_lis'];//ml base de donnee
$id11=$donnees['id1'];
$id22=$donnees['id2'];
$adresse11=$donnees['adresse1'];
$adresse22=$donnees['adresse2'];
$messager=$donnees['message'];}

$Rq = $db->prepare('INSERT INTO `alivraison` (`id_lis`, `id1`, `id2`, `adresse1`, `adresse2`, `message`) VALUES(?,?,?,?,?,?) ');
$Rq->execute([$id,$id11,$id22,$adresse11,$adresse22,$messager]);
$Rq = $db->query("DELETE FROM livraison where id_lis='$ID' ");
}
catch(Exception $e)
{
    die('ERREUR: '. $e->getMessage());
}
    } 

}



?>