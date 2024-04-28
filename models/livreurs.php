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
class livreurs
{
    public string $id_li;
    public string $mdp_li;
    public string $sexe_li;
    public string $cin_li; 
    public string $nom_li;
    public string $prenom_li;
    public string $ddn_li;
    public string $adresse_li;
    public string $email_li;
    public string $image_li;
    public string $permis_li;
    public string $telephone_li;
    public string $tdv_li;

    function update_livreur_adress()
   {
    try{
    $db=config::getConnexion();
    $ID =$_SESSION['IDD'];
    $reponse = $db->query("SELECT * FROM livreurs where id_li=$ID ");
    while ($donnees = $reponse->fetch())
    {
      $id=$donnees['id_li'];//ml base de donnee
      $nom=$donnees['nom_li'];
      $telephone=$donnees['telephone_li'];
      $adresse=$donnees['adresse_li'];
      $email=$donnees['email_li'];
      $Prenom=$donnees['prenom_li'];
      $genre=$donnees['sexe_li'];
      $ddn=$donnees['ddn_li'];
      $tdv=$donnees['tdv_li'];
      $mdp=$donnees['mdp_li'];
      $cin=$donnees['cin_li'];}
  
  if (isset($_POST['submit'])) //kif ttki submit
  {
    $nadresse=$_POST['nadresse'];//ml formulaire
    $Rq = $db->prepare("update `livreurs` set id_li='$ID',mdp_li='$mdp',sexe_li='$genre',cin_li='$cin',nom_li='$nom',prenom_li='$Prenom',ddn_li='$ddn',adresse_li='$nadresse',email_li='$email',telephone_li='$telephone',tdv_li='$tdv' where id_li=$ID");
    $Rq->execute();
      
   }
  }
  catch(Exception $e)
  {
      die('ERREUR: '. $e->getMessage());
  }
  
    }
    function add_livreur()
   {
    try{
    $db=config::getConnexion();
    $Nom=$_POST['nom'];//ml formulaire
        $Prenom=$_POST['prenom'];
        $Genre=$_POST['genre'];
        $CIN=$_POST['CIN'];
        $Telephone=$_POST['telephone'];
        $Adresse=$_POST['adresse'];
        $Adresse_email=$_POST['adresse_email']; 
        $mmdp=$_POST['mdp']; 
        $Date_de_naissance=$_POST['date_de_naissance'];
        $Type_vehicule=$_POST['type_vehicule'];
        $mdp = password_hash($mmdp, PASSWORD_DEFAULT);

        $Rq = $db->prepare('INSERT INTO livreurs (`mdp_li`, `sexe_li`, `cin_li`, `nom_li`, `prenom_li`, `ddn_li`, `adresse_li`, `email_li`, `image_li`, `permis_li`, `telephone_li`, `tdv_li`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?) ');
        $Rq->execute([$mdp,$Genre,$CIN,$Nom,$Prenom,$Date_de_naissance,$Adresse,$Adresse_email, '', '',$Telephone,$Type_vehicule]);
      }
      catch(Exception $e)
      {
          die('ERREUR: '. $e->getMessage());
      }
    }  
    function update_livreur_mdp()
   {
    try{
    $db=config::getConnexion();
    $ID =$_SESSION['IDD'];
    if (isset($_POST['submit'])) //idha klikit aal submit t5dm
  {
    $amdp=$_POST['amdp'];//ml formulaire
    $nnmdp=$_POST['nmdp'];
    $cnmdp=$_POST['cnmdp'];
    $reponse = $db->query("SELECT * FROM livreurs where id_li=$ID ");
    while ($donnees = $reponse->fetch())
    {
      $id=$donnees['id_li'];//ml base de donne
      $nom=$donnees['nom_li'];
      $telephone=$donnees['telephone_li'];
      $adresse=$donnees['adresse_li'];
      $email=$donnees['email_li'];
      $Prenom=$donnees['prenom_li'];
      $genre=$donnees['sexe_li'];
      $ddn=$donnees['ddn_li'];
      $tdv=$donnees['tdv_li'];
      $cin=$donnees['cin_li'];
      $passCheck = password_verify($amdp,$donnees['mdp_li']);}
  
  
    if($passCheck == true){
      if($nnmdp===$cnmdp)
      {
        $nmdp = password_hash($nnmdp, PASSWORD_DEFAULT);
        $Rq = $db->prepare("update `livreurs` set id_li='$ID',mdp_li='$nmdp',sexe_li='$genre',cin_li='$cin',nom_li='$nom',prenom_li='$Prenom',ddn_li='$ddn',adresse_li='$adresse',email_li='$email',telephone_li='$telephone',tdv_li='$tdv' where id_li=$ID");
        $Rq->execute();
        } 
        }
        }
      }
      catch(Exception $e)
      {
          die('ERREUR: '. $e->getMessage());
      }
    }
    function delet_livreur()
   {
    try{
    $db=config::getConnexion();
    $CIN=$_GET['CIN'];
    if(isset($_GET['CIN'])){
      $reponse = $db->query("DELETE FROM livreurs where id_li ='$CIN' ");
    }
  }
  catch(Exception $e)
  {
      die('ERREUR: '. $e->getMessage());
  }
    }   

}



?>