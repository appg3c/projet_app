<?php
/**
* 
*/
//include(dirname(_FILE).'/connect_databaseModel.class.php');//test
class conModel
{
	var $mail;
	var $password;
	function check_connect($con,$mail,$password)// appeler les variation dans le methode
	{
		$sql ="SELECT * FROM client WHERE mail='$mail' and password='$password'";//assurer les disposition de ces variation dans la table
		$result = $con->query($sql); 
		$result_num_rows= mysqli_num_rows($result);//savoir le nombre de colone de ces variation dans le tabel. comme ca, on peux juger ce donnes etait dans le table ou pas. comme si le resultat surperieur a 1 synifie il exite. sion n'existe pas.
		return  $result_num_rows;//retourner la variation de ce methode.
	}
	function get_mail($con)
	{
		$sql = "SELECT mail FROM client";
		$result = $con->query($sql);
		$result_print = mysqli_fetch_array($result);
		return $result_print[0];

	}
	function get_password($con)
	{
		$sql = "SELECT password FROM client";
		$result = $con->query($sql);
		$result_print = mysqli_fetch_array($result);
		return $result_print[0];
	}
	function get_pseudo($con)
	{
		$sql = "SELECT pseudo FROM client";
		$result = $con->query($sql);
		$result_print = mysqli_fetch_array($result);
		return $result_print[0];
	}
}
// test
/*$conn = new connect_database("localhost","root","root","mybd");
$con = $conn->getConnection();*/
//$i = new conModel();
//$mail = htmlspecialchars("huangyingzheng123@gmail.com");
//$password= md5("0000");
//echo $mail;
//echo $password;
//$mail= 'yingzheng@gmail.com';
//$password= "0000";
//$i->check_connect($con,$mail,$password);
//$p = $i->get_mail($con);
//echo $p ;
?>