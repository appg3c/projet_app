

<?php 
session_start();
?>
<!DOCTYPE html>

<meta charset="utf-8">
<html>
<title>Page d'acceuil</title>
<link rel="stylesheet" type="text/css" href="cssflexpa.css">
<body>

<div class="container">




   
    <div class="flexbody">

      


    <div class="menuLeft item">

      

    <?php
    include("menu_verticale.php")
    ?>

      <div align="center">
       <?php
              include("bas_de_page.php")
        ?>
        </div>




    
    

      </div>

      <div class="content item">

    <div class="menuh">

      <?php
    include("menu_horizontal.php")
    ?>
      </div>

<br><br>
      <fieldset class="field_conso">
<?php 
   
   try
   {
      require("connectionbase.php");
   }
   catch(Exception $e)
   {
         die('erreur:'.$e->getMessage());
   }
   // on se connecte à la base de donnée

   if(isset($_POST['effacer'])) // si on clique sur effacer tout les programmes
   {
    $req2 = $bdd->prepare('DELETE FROM `espacemembre`.`programme` WHERE `programme`.`id` > 0'); //on detruit toute les données de la base de donnée dans la table programme
    $req2->execute();
?>
    <div align="center">
<h2>
<?php 
echo "Les programmes sont supprimés";    
?>
</h2>
<?php
    
    
   }

   if(isset($_POST['valider_le_mode'])){ // si on dlique sur valider valide le mode


$cdj = (int)$_POST["cdj"]; //choix du jour de début
$cdm = $_POST["cdm"]; //choix du mois de début
$cfj = (int)$_POST["cfj"]; //choix du jour de fin
$cfm = $_POST["cfm"]; //choix du jour de fin
$t = (int)$_POST["temperature"]; //choix de la température
$nm = $_POST["choix_maison"]; //choix de la maison dans laquelle éffectué le programme


  $req1=$bdd->prepare('INSERT INTO programme(jour_debut, mois_debut, jour_fin, mois_fin, valeur) VALUES (:cdj,:cdm,:cfj,:cfm,:t)');
   // on previent notre base de données qu'on va mettre des valeurs dedans                  
    $req1->execute(array('cdj'=>$cdj,'cdm'=> $cdm,'cfj'=> $cfj,'cfm'=>$cfm, 't'=>$t));
   // la on met les valeurs dedans ( array c'est un tableau donc en fait on les met dans un tableau)
    $req1->CloseCursor();
    ?>
    <div align="center">
<h2>
<?php echo "Programme enregistré";    
?>
</h2>
<?php
  }
    




        ?>
      </fieldset>
    
</div>


</body>



</html>
    
