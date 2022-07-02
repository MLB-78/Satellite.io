<?php
  
   

  // Les variables pour la connexion à la bdd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "diffusion";

  // Les variables pour le formulaire 
    @$nom = $_POST["nom"];
    @$mail = $_POST["mail"];
    @$reseau = $_POST["reseau"];
    @$message = $_POST["message"];
    
  // Les variables pou valider ou refuser
    $erreur = [];
    $valid = [];

    
    
    // SI le champs "nom" est vide

    if(!array_key_exists('nom',$_POST) || $_POST['nom'] == ""){

      $erreur['nom'] = " ";

    }

     // SI le champs "mail' est vide
    if(!array_key_exists('mail',$_POST) || $_POST['mail'] == "") {

      $erreur['mail'] = " ";

    }


     // SI le champs "reseau" est vide
    if(!array_key_exists('reseau',$_POST) || $_POST['reseau'] == ""){

      $erreur['reseau'] = " ";

      }

       // SI le champs "message" est vide
    if(!array_key_exists('message',$_POST) || $_POST['message'] == ""){

      $erreur['message'] = " ";

      }
        

        session_start();
        
        if (!empty($erreur)) {
          
          $_SESSION['erreur'] = $erreur;
          header("Location: Diffusion Satellite.php");
          
        } else {
          
          $_SESSION['valid'] = 1;
          header("Location: Diffusion Satellite.php");

        }



  // Connexion à la BDD                            

  try {
              
    $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    //               le nom de ta table
    $sql = "INSERT INTO formulaire (nom, mail, reseau, message) VALUES ('$nom', '$mail', '$reseau', '$message')";

    $conn->exec($sql);

          
      } catch(PDOException $e) {
 
        echo $sql . "<br>" . $e->getMessage();
      
          

  }

  $conn = null;
    
?>





