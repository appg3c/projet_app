<!DOCTYPE html>
<html>
<?php
if(isset($_POST['ancmail']))      $ancmail=$_POST['ancmail'];
else      $ancmail="";

if(isset($_POST['nvmail']))      $nvmail=$_POST['nvmail'];
else      $nvmail="";

if(isset($_POST['ancmdp']))      $ancmdp=$_POST['ancmdp'];
else      $ancmdp="";

if(isset($_POST['nvmdp']))      $nvmdp=$_POST['nvmdp'];
else      $nvmdp="";

if(empty($ancmail) OR empty($nvmail) OR empty($ancmdp) OR empty($nvmdp)) 
    { 
    echo '<font color="red">Veuillez remplir tout les champs importants !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="espacemembre";

$ancmail=htmlspecialchars($_POST['ancmail']);
$nvmail=htmlspecialchars($_POST['nvmail']);
$nvmdp=md5($_POST['nvmdp']);
$ancmdp=md5($_POST['ancmdp']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqll = "SELECT * FROM utilisateur WHERE password='$ancmdp'";
$sqlll="SELECT * FROM utilisateur WHERE mail='$ancmail'";
$result = $conn->query($sqll);
$resultt = $conn->query($sqlll);
if($result->num_rows == 0){
   // Pas le meme ancien mdp
   echo 'Ancien mot de passe est faux';
}else{
	if ($resultt->num_rows == 0){
   // Pas le meme ancien mail
   echo 'Ancien mail est faux';
   }else{
   // requetes sql pour modifier bdd
   $sql = "UPDATE utilisateur SET password='$nvmdp' WHERE password='$ancmdp'";
   $sqli= "UPDATE utilisateur SET mail='$nvmail' WHERE mail='$ancmail'";
   $resultat= $conn->query($sql);
   $resultat2= $conn->query($sqli);
   echo "Changements enregistrés !";
   }
}
	}	