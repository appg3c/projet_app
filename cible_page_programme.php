<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="programme_disposition1.css"/>
        <title>Programme</title>
    </head>

<header>


<!--    <div id="navigation">
    <a href="page_acceuil.php" class="bouton_nav" id="but1">Vue Générale</a>
    <a href="conso.php" class="bouton_nav" id="but2">Consommation</a>
    <a href="params.php" class="bouton_nav" id="but3">Paramètrage</a> </div>
    </a>

     
      <a href="page_acceuil.php">Vue générale</a>
      <a href="conso.php">Consommation</a>
      <a href="params.php">Paramètrages</a>-->
      

    <div class="miniature" align="left"> 

      <ul id="css3menu1" class="topmenu">
      <li class="topfirst"><a href="#" style=""><span><img src="img/button.png" width="30" alt="photo d'engrenages" /></span> </a>
      <ul>
        <li class="subfirst"><a href="profil.php">Modifier son profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Confidentialité</a></li>
        <li><a href="capteur_et_piece.php">Préférences</a></li>
        <li><a href="page_deco.php">Déconnexion</a></li>

    </ul></li>
    </ul>
    </div>
     
   </header>

<div align="center">

    <ul>
    <li><a href="page_acceuil.php">Page d'Accueil</a></li>
    <li><a href="page_conso_principale.php">Consommation</a></li>
    <li><a href="capteurs.php">Paramètrages</a></li>
    <li><a href="page_programme.php">Programation</a></li>
    
  </ul></div>

  <img src="img/domisep.png" class="logodomisep" alt="domisep" width="170">
    <img src="img/logo.png" class="logodivercity" alt="divercity" width="170">

    
  </html>
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
<?php echo "Les programmes sont supprimés";    
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


  $req1=$bdd->prepare('INSERT INTO programme(jour_debut, mois_debut, jour_fin, mois_fin, valeur, nom_maison) VALUES (:cdj,:cdm,:cfj,:cfm,:t,:nm)');
   // on previent notre base de données qu'on va mettre des valeurs dedans                  
    $req1->execute(array('cdj'=>$cdj,'cdm'=> $cdm,'cfj'=> $cfj,'cfm'=>$cfm, 't'=>$t, 'nm'=>$nm));
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

