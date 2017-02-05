<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="espacemembre";

$SESSIONNOM1 = $_POST['nompiece1'];
$SESSIONNOM2 = $_POST['nompiece2'];
$SESSIONNOM3 = $_POST['nompiece3'];
$SESSIONNOM4 = $_POST['nompiece4'];


$SESSIONFEN1=$_POST['nbrefen1'];
$SESSIONFEN2=$_POST['nbrefen2'];
$SESSIONFEN3=$_POST['nbrefen3'];
$SESSIONFEN4=$_POST['nbrefen4'];

$SESSIONLA1=$_POST['nbrelampe1'];
$SESSIONLA2=$_POST['nbrelampe2'];
$SESSIONLA3=$_POST['nbrelampe3'];
$SESSIONLA4=$_POST['nbrelampe4'];

$SESSIONVO1 =$_POST['nbrevolet1'];
$SESSIONVO2 =$_POST['nbrevolet2'];
$SESSIONVO3 =$_POST['nbrevolet3'];
$SESSIONVO4 =$_POST['nbrevolet4'];

$SESSIONPO1=$_POST['nbreporte1'];
$SESSIONPO2=$_POST['nbreporte2'];
$SESSIONPO3=$_POST['nbreporte3'];
$SESSIONPO4=$_POST['nbreporte4'];

/*$SESSIONSUP=$_SESSION['superficie'];

$SESSIONCASE11=$_SESSION['case11'];
$SESSIONCASE12=$_SESSION['case12'];
$SESSIONCASE13=$_SESSION['case13'];
$SESSIONCASE15=$_SESSION['case15'];
$SESSIONCASE16=$_SESSION['case16'];
$SESSIONCASE17=$_SESSION['case17'];
$SESSIONCASE18=$_SESSION['case18'];

$SESSIONCASE21=$_SESSION['case21'];
$SESSIONCASE22=$_SESSION['case22'];
$SESSIONCASE23=$_SESSION['case23'];
$SESSIONCASE25=$_SESSION['case25'];
$SESSIONCASE26=$_SESSION['case26'];
$SESSIONCASE27=$_SESSION['case27'];
$SESSIONCASE28=$_SESSION['case28'];

$SESSIONCASE31=$_SESSION['case31'];
$SESSIONCASE32=$_SESSION['case32'];
$SESSIONCASE33=$_SESSION['case33'];
$SESSIONCASE35=$_SESSION['case35'];
$SESSIONCASE36=$_SESSION['case36'];
$SESSIONCASE37=$_SESSION['case37'];
$SESSIONCASE38=$_SESSION['case38'];

$SESSIONCASE41=$_SESSION['case41'];
$SESSIONCASE42=$_SESSION['case42'];
$SESSIONCASE43=$_SESSION['case43'];
$SESSIONCASE45=$_SESSION['case45'];
$SESSIONCASE46=$_SESSION['case46'];
$SESSIONCASE47=$_SESSION['case47'];
$SESSIONCASE48=$_SESSION['case48'];*/


//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql99="INSERT INTO piece (nom,superficie,nombrefenetre,nombrevolet,nombrelampe) VALUES ('$SESSIONNOM1','$SESSIONSUP','$SESSIONFEN1','$SESSIONVO1','$SESSIONLA1') ";*/
$sql1= "UPDATE piece SET nom='$SESSIONNOM1' WHERE id='5'";
$sql2= "UPDATE piece SET nom='$SESSIONNOM2' WHERE id='6'";
$sql3= "UPDATE piece SET nom='$SESSIONNOM3' WHERE id='7'";
$sql4= "UPDATE piece SET nom='$SESSIONNOM4' WHERE id='8'";

$sqlfen1= "UPDATE piece SET nombrefenetre='$SESSIONFEN1' WHERE id='5'";
$sqlfen2= "UPDATE piece SET nombrefenetre='$SESSIONFEN2' WHERE id='6'";
$sqlfen3= "UPDATE piece SET nombrefenetre='$SESSIONFEN3' WHERE id='7'";
$sqlfen4= "UPDATE piece SET nombrefenetre='$SESSIONFEN4' WHERE id='8'";

$sqlla1= "UPDATE piece SET nombrelampe='$SESSIONLA1' WHERE id='5'";
$sqlla2= "UPDATE piece SET nombrelampe='$SESSIONLA2' WHERE id='6'";
$sqlla3= "UPDATE piece SET nombrelampe='$SESSIONLA3' WHERE id='7'";
$sqlla4= "UPDATE piece SET nombrelampe='$SESSIONLA4' WHERE id='8'";

$sqlvo1= "UPDATE piece SET nombrevolet='$SESSIONVO1' WHERE id='5'";
$sqlvo2= "UPDATE piece SET nombrevolet='$SESSIONVO2' WHERE id='6'";
$sqlvo3= "UPDATE piece SET nombrevolet='$SESSIONVO3' WHERE id='7'";
$sqlvo4= "UPDATE piece SET nombrevolet='$SESSIONVO4' WHERE id='8'";

$sqlpo1= "UPDATE piece SET nombreporte='$SESSIONPO1' WHERE id='5'";
$sqlpo2= "UPDATE piece SET nombreporte='$SESSIONPO2' WHERE id='6'";
$sqlpo3= "UPDATE piece SET nombreporte='$SESSIONPO3' WHERE id='7'";
$sqlpo4= "UPDATE piece SET nombreporte='$SESSIONPO4' WHERE id='8'";  

/*$sqlcas11= "UPDATE objets_connectes SET etat='$SESSIONCASE1' WHERE categorie='temperature'";
$sqlcas12= "UPDATE objets_connectes SET etat='$SESSIONCASE2' WHERE id_piece='1'";
$sqlcas11= "UPDATE objets_connectes SET etat='$SESSIONCASE1' WHERE id_piece='1'";
$sqlcas11= "UPDATE objets_connectes SET etat='$SESSIONCASE1' WHERE id_piece='1'";
$sqlcas11= "UPDATE objets_connectes SET etat='$SESSIONCASE1' WHERE id_piece='1'";*/
 
   $resultat= $conn->query($sql1);
   $resultat2= $conn->query($sql2);
   $resultat3= $conn->query($sql3);
   $resultat4= $conn->query($sql4);
   
   $resultatfen1= $conn->query($sqlfen1);
   $resultatfen2= $conn->query($sqlfen2);
   $resultatfen3= $conn->query($sqlfen3);
   $resultatfen4= $conn->query($sqlfen4);
   
   $resultatla1= $conn->query($sqlla1);
   $resultatla2= $conn->query($sqlla2);
   $resultatla3= $conn->query($sqlla3);
   $resultatla4= $conn->query($sqlla4);
   
   $resultatvo1= $conn->query($sqlvo1);
   $resultatvo2= $conn->query($sqlvo2);
   $resultatvo3= $conn->query($sqlvo3);
   $resultatvo4= $conn->query($sqlvo4);
   
   $resultatpo1= $conn->query($sqlpo1);
   $resultatpo2= $conn->query($sqlpo2);
   $resultatpo3= $conn->query($sqlpo3);
   $resultatpo4= $conn->query($sqlpo4);
   
   
   /*if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}*/

	  
 header ("location:connexionclient.php");
?>