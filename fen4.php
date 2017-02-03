<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="espacemembre";

$email = $_SESSION['mail'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql3 = "SELECT * FROM utilisateur INNER JOIN piece ON utilisateur.id_maison=piece.id_maison INNER JOIN objets_connectes ON piece.id=objets_connectes.id_piece WHERE valeur='$email' AND id_piece='1' OR valeur='104' "; 
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
     // output data of each row
     while($row3 = $result3->fetch_assoc()) {   //fetch prendre les infos sur la base
         echo " ". $row3["etat"].  "" ;
     }
} else {
     echo "0 results";
}

$conn->close();
?>