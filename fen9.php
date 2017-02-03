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

$sql = "SELECT * FROM utilisateur INNER JOIN posseder ON utilisateur.id=posseder.id_utilisateur INNER JOIN piece ON posseder.id_maison=piece.id_maison INNER JOIN objets_connectes ON piece.id=objets_connectes.id_piece WHERE valeur='$email' AND id_piece='1' OR valeur='9' "; 
$resultt = $conn->query($sql);
if ($resultt->num_rows > 0) {
     // output data of each row
     while($row2 = $resultt->fetch_assoc()) {   //fetch prendre les infos sur la base
         echo " ". $row2["etat"].  "" ;
     }
} else {
     echo "0 results";
}

$conn->close();
?>