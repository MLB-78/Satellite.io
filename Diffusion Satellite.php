<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.70">
    <link rel="stylesheet" href="Diffusion Satellite.css">
    <link rel="shortcut icon" href="Icône satellite.webp">

    <title>Diffusion Satellite</title>
    <h1> Diffuse ta prod </h1>

</head>
    
    <h5> Pour les beatmakers amateur, on diffuse ta prod gratuitement si 
        les beatmakers professionnels de satellite estime qu'il pourrait être
        vendu à un prix adéquat !
    </h5>

<br><br>

    <br><br>

<body>



    <!-- SI il y a un champs du formulaire n'est pas rempli  -->
    <?php  if(array_key_exists('erreur', $_SESSION)): ?>
        
        <div class="erreur">

            <div class="erreurA">
                
                <?= implode('<br>', $_SESSION['erreur']); ?>
                
            </div>

        </div>
        <?php endif; ?>
        
        
        
        
    <!-- SI tout est bon -->
    <?php  if(array_key_exists('valid', $_SESSION)): ?>

        <div class="sucess">

            <div class="sucessA">
                
                Le formulaire à été remplis avec succès nous te recontacterons dans les meilleurs délais. <br><br>
                Maintenant Partez !
                
            </div>
            
        </div>    
            <?php endif; ?>
            
            <br><br>

            <!--DEBUT DU FORMULAIRE-->
            
            <form action="Diffusion Back.php" method="post" enctype="multipart/form-data">     
                <div class="formulaire">
                    
                    <div class="élément">
                        
                        <div class="name">
                            
                            <div class="n1">
                                
                                nom / prénom ou pseudonyme d'artiste *&nbsp; 
                                
                            </div>
                            
                            <br>
                
                        <div class="n2">

                    <input required type="text" name="nom" placeholder="ex : MLB 78_1">
                    
                </div>
                
            </div>
            
            <br><br>
            
            <div class="mail">
                
                <div class="m1">
                    
                    e-mail *
                    
                </div>   
                
                <br>
                
                <div class="m2">
                    
                    <input required type="email" type="texte" name="mail" placeholder="ex : xyz@outlook.fr">
                    
                </div>
                
            </div>
            
            
            <br><br>
            
            
            <div class="réseau">
                
                <div class="r1">
                    
                    réseau sociale *
                    
                </div>  
                
                <br>
                
                <div class="r2">
                    
                    <input required type="texte" name="reseau" placeholder="ex : blm_dev.web">
                    
                </div>
                
            </div>
            
            
            <br><br>
            
            
            <div class="fichier">
                
                <div class="f1">
                    
                    fichier de ta prod 
                    
                </div>  
                
                <br>
                
                <div class="f2">
                    
                    <input type="file" name="fichier" >

                </div>
                
            </div>
            
            
            <br><br>
            <div class="message">
                
                <div class="me1">
                    
                    message *
                    
                </div>  
                
                <br>
                
                <div class="me2">
                    
                    <textarea required name="message" cols="40" rows="7" placeholder="Écrivez votre message..."></textarea>
                    
                </div>
                
            </div>
            
            
            <br><br><br>
            
            <div class="btn">
                
                <input type="submit" name="envoyer" value="Envoyer" >
                
            </div>
            
            
        </div>
        
        
    </div>
    
</form>

<br><br>




</body>



</html>


<!-- Refresh de la page après le message d'erreur -->
<?php 

    unset($_SESSION['erreur']);
    unset($_SESSION['valid']);
    

?>