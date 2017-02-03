<?php 
session_start();
include("nbrecapteurs.php");
header("location: cuisine.php");
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
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="espacemembre";

$temperature=$_POST['temperature'];


$fenetre1=$_POST['fenetre1'];
if (isset($_POST['fenetre2'])) {
$fenetre2=$_POST['fenetre2'];
}
if (isset($_POST['fenetre3'])) {
$fenetre3=$_POST['fenetre3'];
}
$lumiere1=$_POST['lampe1'];
if (isset($_POST['lampe2'])) {
$lumiere2=$_POST['lampe2'];
}
if (isset($_POST['lampe3'])) {
$lumiere3=$_POST['lampe3'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="UPDATE objets_connectes SET valeur='$temperature' WHERE categorie='temperature' and id_piece='5'";
if ($conn->query($sql)===TRUE){
	echo "<div align='center'> <br><br><br> <font color='green'>Paramètrages effectués !</font></div>";
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}
$sqll="UPDATE objets_connectes SET etat='$fenetre1' WHERE categorie='fenetre' and valeur='1'";
if ($conn->query($sqll)===TRUE){
	echo "";
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}
if (isset ($fenetre2)){
$sqll2="UPDATE objets_connectes SET etat='$fenetre2' WHERE categorie='fenetre' and valeur='2'";
if ($conn->query($sqll2)===TRUE){
	echo "";
}
}
else{
	echo "error:".$sql.'<br>'.$conn->error;
}
if (isset ($fenetre3)){
$sqll3="UPDATE objets_connectes SET etat='$fenetre3' WHERE categorie='fenetre' and valeur='3'";
if ($conn->query($sqll3)===TRUE){
	echo "";
}
}
$sqll4="UPDATE objets_connectes SET etat='$lumiere1' WHERE categorie='lampe' and valeur='101'";
if ($conn->query($sqll4)===TRUE){
	echo "";
}
if (isset ($lumiere2)){
$sqll5="UPDATE objets_connectes SET etat='$lumiere2' WHERE categorie='lampe' and valeur='102'";
if ($conn->query($sqll5)===TRUE){
	echo "";
}
}
?>