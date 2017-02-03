<?php include("page_renseignement.php");
$con = new mysqli('localhost','root','root','espacemembre') or die('failed for connection');

$maison=$_POST['maison1'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$cp=(int)$_POST['code_postal'];

$req1="INSERT INTO maison(nom_maison,adresse,ville, code_postal) VALUES ('$maison','$adresse','$ville','$cp')";

$result1= $con->query($req1) or die('cant be insert');

/*
$req2=$bdd->prepare('SELECT id FROM maison WHERE nom_maison==$maison');
$req2->execute();


$req1=$bdd->prepare('INSERT INTO posseder(id_utilisateur, id_maison) VALUES (:id_utilisateur,:id_maison,)');

            
$req3->execute(array('id_utilisateur'=>$result,'id_maison'=> $req2));

$req1->closeCursor();
$req2->closeCursor();
$req3->closeCursor();*/
?>