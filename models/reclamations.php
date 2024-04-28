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
class reclamations
{
    public string $id_re;
    public string $description_re;
    public string $td_re;
    public string $id_li; 
    public string $id_ar;


    function add_reclamations()
   {
    try{
        $db=config::getConnexion();
        $id_li=$_POST['id_li'];
        $id_ar=$_POST['id_ar'];
        $type=$_POST['type'];
            $message=$_POST['message'];
        $Rq = $db->prepare('INSERT INTO `reclamations` (description_re,td_re,id_li,id_ar) VALUES(?,?,?,?) ');
        $Rq->execute([$message,$type,$id_li,$id_ar]);

        
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }
    function delete_reclamation()
{
    try{
    $db=config::getConnexion();
    $id_re=$_GET['id_re'];
    if(isset($_GET['id_re'])){
      $reponse = $db->query("DELETE FROM reclamations where id_re='$id_re' ");
    }
}catch(PDOException $e)  {

    $e->getMessage();
}


} 

}



?>