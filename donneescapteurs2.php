<?php 
session_start();
include("nbrecapteurs.php");
header('location:salon.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="programme_disposition1.css"/>
        <title>Programme</title>
    </head>

<header>
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
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="espacemembre";

$temperature=$_POST['temperature'];
$fenetre5=$_POST['fenetre5'];
$fenetre6=$_POST['fenetre6'];
if (isset($_POST['fenetre7'])) {
$fenetre7=$_POST['fenetre7'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="UPDATE objets_connectes SET valeur='$temperature' WHERE categorie='temperature' and id_piece='6'";
if ($conn->query($sql)===TRUE){
	echo "<div align='center'> <br><br><br> <font color='green'>Paramètrages effectués !</font></div>";
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}
$sqll="UPDATE objets_connectes SET etat='$fenetre5' WHERE categorie='fenetre' and valeur='5'";
if ($conn->query($sqll)===TRUE){
	echo "";
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}

$sqll2="UPDATE objets_connectes SET etat='$fenetre6' WHERE categorie='fenetre' and valeur='6'";
if ($conn->query($sqll2)===TRUE){
	echo "";
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}
if (isset ($fenetre3)){
$sqll3="UPDATE objets_connectes SET etat='$fenetre7' WHERE categorie='fenetre' and valeur='7'";
if ($conn->query($sqll3)===TRUE){
	echo "";
}
}

?>