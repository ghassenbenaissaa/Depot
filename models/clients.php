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
    public string $id_client;
    public string $nom;
    public string $prenom;
    public string $ddn; 
    public string $sexe;
    public string $email;
    public string $adresse;
    public string $mdp;
    public string $telephone;
    public string $image;
    public string $point_carb;
    public string $img_name;
    public string $img_size;
    public string $tmp_name;
    public string $img_ex;
    public string $img_ex_lc;
    public string $new_img_name;
    public string $img_upload_path;

    function add_client()
    {      
        $db=config::getConnexion();
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $ddn=$_POST['ddn'];
        $email=$_POST['email'];
        $telephone=$_POST['telephone'];
        $sexe=$_POST['sexe'];
        $adresse=$_POST['adresse'];
        $mmdp=$_POST['mdp'];
        //$image=$_POST['image'];
        $point_carb=0;
        $mdp = password_hash($mmdp, PASSWORD_DEFAULT);
        if ( isset($_FILES['image'])) {
        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        if ($error === 0) {
          
              $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
              $img_ex_lc = strtolower($img_ex);
        
              $allowed_exs = array("jpg", "jpeg", "png"); 
        
              if (in_array($img_ex_lc, $allowed_exs)) {
                  $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                  $img_upload_path = '../controllers/images/'.$new_img_name;
                  move_uploaded_file($tmp_name, $img_upload_path);
        
                  // Insert into Database
                  $Rq = $db->prepare('INSERT INTO clients (nom,prenom,ddn,sexe,email,adresse,mdp,telephone,image,point_carb) VALUES(?,?,?,?,?,?,?,?,?,?) ');
$Rq->execute([$nom,$prenom,$ddn,$sexe,$email,$adresse,$mdp,$telephone,$new_img_name,$point_carb]);
                 if ($Rq)
                 {
                   // echo "Data inserted successfully" ; 
                  header ("location:../email/send.php?email=$email");
                 }
          
        }
        } 
        //instantiation dun nouveau client
        }
       
    }

    function delete_client()
    {
        try{
        $db=config::getConnexion();
        $Id =$_GET['effacerid'];
        if(isset($_GET['effacerid'])){
          $reponse = $db->query("DELETE FROM clients where id_client='$Id' ");
        }
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }
    }

    function update_client_mdp()
    {
        try{
        $db=config::getConnexion();
        $ID =$_SESSION['IDD'];
        if (isset($_POST['submit']))
    {
         $amdp=$_POST['amdp'];
        $nnmdp=$_POST['nmdp'];
        $cnmdp=$_POST['cnmdp'];
         $reponse = $db->query("SELECT * FROM clients where id_client='$ID' ");
        while ($donnees = $reponse->fetch())
            {
            $id=$donnees['id_client'];
            $nom=$donnees['nom'];
            $telephone=$donnees['telephone'];
            $adresse=$donnees['adresse'];
            $passCheck = password_verify($amdp,$donnees['mdp']);
            $email=$donnees['email'];
            $prenom=$donnees['prenom'];
            $ddn=$donnees['ddn'];
            $sexe=$donnees['sexe'];
            $point_carb=$donnees['point_carb'];
            $image=$donnees['image'];
            }

  if($passCheck == true){
    if($nnmdp===$cnmdp)
    {
      $nmdp = password_hash($nnmdp, PASSWORD_DEFAULT);
    $Rq = $db->prepare("update `clients` set id_client='$ID',nom='$nom',prenom='$prenom',ddn='$ddn',sexe='$sexe',email='$email',adresse='$adresse',mdp='$nmdp',telephone='$telephone',image='$image',point_carb='$point_carb' where id_client=$ID");
    $Rq->execute();
    } 
       
    }
    }
}catch(PDOException $e)  {
    
    $e->getMessage();
}
    }
    function update_client_adress()
    {
        try{
        $db=config::getConnexion();
          $ID =$_SESSION['IDD'];
          $reponse = $db->query("SELECT * FROM clients where id_client='$ID' ");
          while ($donnees = $reponse->fetch())
          {
              $id=$donnees['id_client'];
              $nom=$donnees['nom'];
              $telephone=$donnees['telephone'];
              $adresse=$donnees['adresse'];
              $email=$donnees['email'];
              $mdp=$donnees['mdp'];
              $prenom=$donnees['prenom'];
              $ddn=$donnees['ddn'];
              $sexe=$donnees['sexe'];
              $point_carb=$donnees['point_carb'];
              $image=$donnees['image']; }
        
        if (isset($_POST['submit']))
        {
          $nadresse=$_POST['nadresse'];
          $Rq = $db->prepare("update `clients` set id_client='$ID',nom='$nom',prenom='$prenom',ddn='$ddn',sexe='$sexe',email='$email',adresse='$nadresse',mdp='$mdp',telephone='$telephone',image='$image',point_carb='$point_carb' where id_client=$ID");
          $Rq->execute();
        }
    }catch(PDOException $e)  {
    
        $e->getMessage();
    }

    }

}



?>
