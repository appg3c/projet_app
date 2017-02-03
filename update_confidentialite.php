<?
session_start();
$con = new mysqli("localhost","root","root","espacemembre");
if ($con->connect_error) 
{
    die("connecting failed: ".$con->connect_error);
}


$sql = "SELECT pseudo FROM utilisateur";//echo pseudo
$result = $con->query($sql)or die("cant be select");
$result_print = mysqli_fetch_array($result);
$pseudo = $result_print[0];
echo $result_print[0];


$sql1 = "SELECT mail FROM utilisateur";//echo mail
$result1 = $con->query($sql1)or die("cant be select also");
$result_print1 = mysqli_fetch_array($result1);
$mail = $result_print1[0];
echo $result_print1[0];

if (isset($_POST['submit'])) 
{
	$entre_nom1= $_POST['entre_nom'];
	$entre_prenom1=$_POST['entre_prenom'];
	$sql3= "UPDATE utilisateur SET entre_nom= '$entre_nom1' WHERE pseudo='$pseudo'";
	$sql4= "UPDATE utilisateur SET entre_prenom= '$entre_prenom1' WHERE pseudo= '$pseudo'";
	$result3=$con->query($sql3)or die("error:".$sql3.'<br>'.$con->error);
	$result4=$con->query($sql4)or die("error:".$sql4.'<br>'.$con->error);
	$new_password= $_POST['new_password'];
	$sql_changer_password= "UPDATE utilisateur SET password='$new_password'";
	$result_changer_password = $con->query($sql_changer_password) or die("error:".$sql_show_old_password.'<br>'.$con->error);
}
$sql2="SELECT nom FROM utilisateur";// echo enter nom et inserer celui
$result2 = $con->query($sql2) or die('110');
$result_print2 = mysqli_fetch_array($result2);
$entre_nom = $result_print2[0];

$sql6 = "SELECT prenom FROM utilisateur";//echo mail
$result6 = $con->query($sql6)or die("cant be select also1");
$result_print6 = mysqli_fetch_array($result6);
$entre_prenom = $result_print6 [0];	

$sql_show_old_password="SELECT password FROM utilisateur";
$result_show = $con->query($sql_show_old_password)or die("cant be select also2");
$result_print_show = mysqli_fetch_array($result_show);
$password = $result_print_show[0];






/*else 
{
	
	$enter_nom=$result_print2[0];
	$sql5="SELECT entre_prenom FROM utilisateur";// echo enter nom et inserer celui
	$result5 = $con->query($sql5);
	$result_print5 = mysqli_fetch_array($result5);
	$enter_prenom= $result_print4[5];
}**/
$_SESSION['pseudo']= $pseudo;
$_SESSION['mail']= $mail;
$_SESSION['entre_nom']=$entre_nom;
$_SESSION['entre_prenom']=$entre_prenom;
$_SESSION['password']= $password;
header("refresh:1;url=page_accueil_profil.php");
?>