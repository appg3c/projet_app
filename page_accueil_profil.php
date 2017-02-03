<?
session_start();
$host= "localhost";
$name="root";
$password="root";
$database= "espacemembre";
$con = new mysqli($host,$name,$password,$database);
if ($con->connect_error) 
{
    die("connecting failed: ".$con->connect_error);
}
$mail= $_SESSION['mail'];

$sql = "SELECT pseudo FROM utilisateur WHERE mail='$mail'";//echo pseudo
$result = $con->query($sql)or die("cant be select");
$result_print = mysqli_fetch_array($result);
$pseudo = $result_print[0];
$_SESSION['pseudo']=$pseudo;

$sql2="SELECT nom FROM utilisateur WHERE mail= '$mail'";// echo enter nom et inserer celui
$result2 = $con->query($sql2) or die('110');
$result_print2 = mysqli_fetch_array($result2);
$entre_nom = $result_print2[0];
$_SESSION['entre_nom']=$entre_nom;

$sql6 = "SELECT prenom FROM utilisateur WHERE mail='$mail'";//echo mail
$result6 = $con->query($sql6)or die("cant be select also1");
$result_print6 = mysqli_fetch_array($result6);
$entre_prenom = $result_print6 [0]; 
$_SESSION['entre_prenom']=$entre_prenom;

$sql_id=" SELECT id FROM utilisateur WHERE mail='$mail'";
$result_id= $con->query($sql_id)or die("error:".$sql_id.'<br>'.$con->error);
$result_id_in_array= mysqli_fetch_array($result_id);
$id= $result_id_in_array['0'];

if (isset($_POST['submit'])) 
{
  $entre_nom1= $_POST['entre_nom'];
  $entre_prenom1=$_POST['entre_prenom'];
  $nombre_de_personne= $_POST['nombre_de_personne'];
  $nombre_de_piece = $_POST['nombre_de_piece'];
  $type_de_piece = $_POST['type_de_piece'];

  
  $sql3= "UPDATE utilisateur SET nom= '$entre_nom1' WHERE mail='$mail'";
  $sql4= "UPDATE utilisateur SET prenom= '$entre_prenom1' WHERE mail='$mail'";
  $result3=$con->query($sql3)or die("error:".$sql3.'<br>'.$con->error);
  $result4=$con->query($sql4)or die("error:".$sql4.'<br>'.$con->error);
  

  if ($_POST['radio_domicile']=='true') 
  {
    $sql_personne="UPDATE maison SET nombre_de_personne = '$nombre_de_personne' WHERE id='$id'";
    $sql_piece="UPDATE maison SET nombre_de_piece = '$nombre_de_piece' WHERE id='$id'";
    $sql_type="UPDATE utilisateur SET type_utilisateur ='$type_utilisateur' WHERE mail='$mail'";
    $result9=$con->query($sql_personne)or die("error:".$sql_personne.'<br>'.$con->error);
    $result10=$con->query($sql_piece)or die("error:".$sql_piece.'<br>'.$con->error);
    $result11=$con->query($sql_type)or die("error:".$sql_type.'<br>'.$con->error);
    echo "information dormicle renouvller reussit"; # code...
  }

  if ($_POST['radio']=='true') 
  {
    $password = md5($_POST['old_password']);
    $sql_check="SELECT password FROM utilisateur WHERE mail='$mail'";
    $result_check= $con->query($sql_check) or die("error:".$sql_check.'<br>'.$con->error);
    $result_check_in_array= mysqli_fetch_array($result_check);
      if ($password == $result_check_in_array['0']) 
      {
        $new_password=md5($_POST['new_password']);
        $sql_update_password= "UPDATE utilisateur SET password='$new_password' WHERE mail='$mail'";
        $result_update_password= $con->query($sql_update_password) or die("error:".$sql_update_password.'<br>'.$con->error);
        echo "successful ";
      }
      else
      {
        echo "failed";
      }
  }
}
?>
<?
session_start();
?>
<legend><h2> Modifier son profil : </h2></legend>
<fieldset class="field_profil">
  <br>
  <legend><h2> Informations personnelles :</h2></legend>
  <form action="" method="POST">
  <table width="100%">
  <tr>
  <td align="right" width="40%">
   <label for="nvmail"> Mail : </label>
   </td>
   <td align="left" width="60%">
   <?echo $_SESSION['mail'];?>
   </td></tr>
   </br>
   <tr>
   <td align="right">
  <label for="ancmail"> Pseudo : </label>
  </td>
  <td align="left"> 
    <?echo $_SESSION['pseudo'];?></br>
    </td></tr>
<tr>
<td align="right">
  <label for="ancmdp"> Nom :</label>
  </td>
  <td align="left">
    <input type="text" name="entre_nom" placeholder="<?echo $_SESSION['entre_nom'];?>" value="" required /> </td></tr>
    <tr>
    <td align="right">
  <label for="mdp"> Prenom :</label></td>
  <td align="left">
    <input type="text" name="entre_prenom" placeholder="<?echo $_SESSION['entre_prenom'];?>" value="" required /></td>
    </tr>
    </table>
     <fieldset>
       <legend><h3> <input  type="radio" name="radio" value="true">Modifier son mot de passe</h3></legend> 
         </br>
            <label for="nombredepersonne">Ancien mot de passe :</label> </br>
            <input type="password" placeholder="Ancien mot de passe" name="old_password" value=""></br>
            <label for="nombredepiece">Nouveau mot de passe :</label></br>
            <input type="password" placeholder="Nouveau mot de passe" name="new_password" value=""></br>
    </fieldset>
  <br>
  <fieldset >
       <legend><h3> <input type="radio" name="radio_domicile" value="true">Informations domicile</h3></legend>  </br>  
            <label for="nombredepersonne">Nombre de personne :</label> </br>
            <input type="text" placeholder="Combien êtes vous ?" name="nombre_de_personne" value="" /></br>
            <label for="nombredepiece">Nombre de pièces :</label></br>
            <input type="text" placeholder="nombre de pieces" name="nombre_de_piece" value="" /></br>
            <label for="typedepicece">Type de pièce:</label></br>
            <input type="text" placeholder="Type de pièce" name="type_de_piece" value="" /></br>

    </fieldset>
   </fieldset>  
   <br><br>
     

    
        </br>
        <input  type="submit" name="submit" onclick="myFunction()" class="bouton_modif" value="Enregistrer les modifications" /></p>
  </form>
  <script>
function myFunction() {
    alert("je veux modifier mon profil");
}
</script>
