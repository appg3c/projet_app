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

$sqll = "SELECT * FROM utilisateur INNER JOIN piece ON utilisateur.id_maison=piece.id_maison WHERE mail='$email' AND type='cuisine'"; 
$result = $conn->query($sqll);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {   //fetch prendre les infos sur la base
         echo "". $row["nom"]. " " ;
     }
} else {
     echo "0 results";
}

$conn->close();
?>