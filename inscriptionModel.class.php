<?php
/**
* 拉哥我的代码
这个是注册的模型层
*/
//require(dirname(_FILE).'/connect_databaseModel.class.php');
class inscriptionModel 
{
	var $pseudo;
	var $mail;
	var $password;
	function insert($pseudo,$mail,$password,$con)
	{
		$sql="INSERT INTO client(pseudo,mail,password)VALUES ('$pseudo','$mail','$password')";
		$result = $con->query($sql) or die("error:".$sql.'<br>'.$con->error);
	}
	function check_repeat($mail,$con)
	{
		$sql ="SELECT * FROM client WHERE mail='$mail'";
		$result = $con->query($sql); 
		$result_num_rows= mysqli_num_rows($result);
		return $result_num_rows;
	}
}
//$obj= new inscriptionModel();
//$conn = new connect_database("localhost","root","root","mybd");
//$con = $conn->getConnection();
//$obj->insert("huang","huang@gmail.com","0000",$con);
//$obj->check_repeat('huang@gmail.com',$con);
/*$obj= new inscriptionModel();
$table="personne";
$data= array("Name"=>"'huangy'","Passeword"=>"123456");
$obj->insert($con,$table,$data);*/
?>