
<!DOCTYPE html>
<html>
<head>
	<title> gerer des comptes</title>
</head>
<body>
<fieldset>
<legend><h3> Gerer des comptes</h3></legend> 
<form action="" method="POST">
<input type="radio" name="gerneur" value="admin" checked> je suis l'administateur
<input type="radio" name="gerneur" value="no_admin" >je ne suis pas l'administateur
<br>
mail: <input type="text" name="mail" value="">
password: <input type="password" name="password" value="">
<br>
<input type="submit" name="submit"  onclick="myFunction()" class="bouton_modif" value="submit">
</form>
<script>
function myFunction() {
    alert("ton compte est valider");
}
</script>
</fieldset>
</body>
</html>
<?
$local= "localhost";
$name="root";
$password="root";
$database="espacemembre";
$con = new mysqli($local,$name,$password,$database) or die('failed connection');
$radio= $_POST['gerneur'];
$mail=$_POST['mail'];
$password=md5($_POST['password']);

if (isset($_POST['submit']) and $radio=="admin") 
{
		$sql="SELECT mail FROM utilisateur";
		$result = $con->query($sql) or die("error:".$sql.'<br>'.$con->error);
		$result_in_array = mysqli_fetch_array($result);#$result_in_array[0]
		$sql_password= "SELECT password FROM utilisateur";
		$result_password= $con->query($sql_password) or die('error:'.$sql_password.'<br>'.$con->error);
		$result_password_in_array=mysqli_fetch_array($result_password);
		if ($result_in_array[0]==$mail and $result_password_in_array[0]==$password) {
			//include("delect_file.php");
			//echo "ton compte est valide";
			header("l'Location: delect_file.php'");
			# code...
		}
		else
		{
			echo "cant be connect";
			echo $result_in_array[0];
			echo $result_password_in_array[0];
			echo $password;
		}



}
elseif (isset($_POST['submit']) and $radio=="no_admin") {
	echo "vous ne pouvez pas gerer des comptes";
	# code...
}
?>