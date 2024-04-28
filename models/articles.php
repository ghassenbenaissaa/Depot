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
class articles
{
    public string $nom_ar;
    public string $valeur_ar;
    public string $categorie_ar; 
    public string $quantite_ar;
    public string $description_ar;
    public string $image_ar; 
    public string $etat_ar;
    public string $dda_ar;

    function addarticles()
    {
      try{
        $nom_ar=$_POST['Nom_ar'];
        $valeur_ar=$_POST['Valeur_ar'];
        $categorie_ar=$_POST['Catégorie_ar'];
        $quantite_ar=$_POST['Quantité_ar'];
        $description_ar=$_POST['Description_ar'];
        $image_ar=$_POST['subject'];
        $etat_ar=$_POST['Etat_ar'];
        $dda_ar=$_POST['Date_ar'];
        $id_client=$_GET['id'];
        $db=config::getConnexion();
        $query = $db->prepare(
            'INSERT INTO articles (id_ar,nom_ar,valeur_ar,categorie_ar,quantite_ar,description_ar,image_ar,etat_ar,dda_ar,id_client)
                VALUES (NULL,:nom_ar,:valeur_ar,:categorie_ar,:quantite_ar,:description_ar,:image_ar,:etat_ar,:dda_ar,:id_client)'
        );
        $query->execute(['nom_ar'=>$nom_ar,'valeur_ar' =>$valeur_ar,'categorie_ar' =>$categorie_ar,'quantite_ar' => $quantite_ar,'description_ar' =>$description_ar,'image_ar' =>$image_ar,'etat_ar' => $etat_ar,'dda_ar' => $dda_ar,'id_client' => $id_client]);
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }


    function delete_article()
    {
        try{
        $id=$_GET['id'];
        $db=config::getConnexion();
        if(isset($_GET['id'])){
          $reponse = $db->query("DELETE FROM articles where id_ar='$id' ");
        }
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }

    function delete_article_dash()
    {
        try{
            $id_ar=$_GET['id_ar'];
            $db=config::getConnexion();
            if(isset($_GET['id_ar'])){
              $reponse1 = $db->query("DELETE FROM articles where id_ar='$id_ar'");
            }    
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }

    function update_article()
    {
        try{
        $id=$_SESSION['IDD'];
        $idd=$_GET['id'];
        $Nom_ar=$_POST['Nom_ar'];
        $Valeur_ar=$_POST['Valeur_ar'];
        $Catégorie_ar=$_POST['Catégorie_ar'];
        $Quantité_ar=$_POST['Quantité_ar'];
        $Description_ar=$_POST['Description_ar'];
        $Date_ar=$_POST['Date_ar'];
        $Etat_ar=$_POST['Etat_ar'];  
        $db=config::getConnexion();
        $Rq = $db->prepare("update `articles` set nom_ar='$Nom_ar',valeur_ar='$Valeur_ar',categorie_ar='$Catégorie_ar',quantite_ar='$Quantité_ar',description_ar='$Description_ar',etat_ar='$Etat_ar',dda_ar='$Date_ar',id_client='$id' where id_ar=$idd");
        $Rq->execute();
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }

}



?>