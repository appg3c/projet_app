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
     $_SESSION['nbrelampe1']=$row["nombrelampe"];
     $_SESSION['nbrefen1']=$row["nombrefenetre"];
     $_SESSION['nbrevolet1']=$row["nombrevolet"];
     $_SESSION['nbreporte1']=$row["nombreporte"];	 
     }
} else {
     echo "0 results";
}

$sql = "SELECT * FROM utilisateur INNER JOIN piece ON utilisateur.id_maison=piece.id_maison WHERE mail='$email' AND type='chambre'"; 
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
     // output data of each row
     while($row2 = $result2->fetch_assoc()) {   //fetch prendre les infos sur la base
     $_SESSION['nbrelampe2']=$row2["nombrelampe"];
	 $_SESSION['nbrefen2']=$row2["nombrefenetre"];
	 $_SESSION['nbrevolet2']=$row2["nombrevolet"];
	 $_SESSION['nbreporte2']=$row2["nombreporte"];
     }
} else {
     echo "0 results";
}

$sql2 = "SELECT * FROM utilisateur INNER JOIN piece ON utilisateur.id_maison=piece.id_maison WHERE mail='$email' AND type='salon'"; 
$result3 = $conn->query($sql2);
if ($result3->num_rows > 0) {
     // output data of each row
     while($row3 = $result3->fetch_assoc()) {   //fetch prendre les infos sur la base
     $_SESSION['nbrelampe3']=$row3["nombrelampe"];
	 $_SESSION['nbrefen3']=$row3["nombrefenetre"];
	 $_SESSION['nbrevolet3']=$row3["nombrevolet"];
	 $_SESSION['nbreporte3']=$row3["nombreporte"];
     }
} else {
     echo "0 results";
}

$sql3 = "SELECT * FROM utilisateur INNER JOIN piece ON utilisateur.id_maison=piece.id_maison WHERE mail='$email' AND type='sdb'"; 
$result4 = $conn->query($sql3);
if ($result4->num_rows > 0) {
     // output data of each row
     while($row4 = $result4->fetch_assoc()) {   //fetch prendre les infos sur la base
     $_SESSION['nbrelampe4']=$row4["nombrelampe"];
	 $_SESSION['nbrefen4']=$row4["nombrefenetre"];
	 $_SESSION['nbrevolet4']=$row4["nombrevolet"];
	 $_SESSION['nbreporte4']=$row4["nombreporte"];
     }
} else {
     echo "0 results";
}


?>