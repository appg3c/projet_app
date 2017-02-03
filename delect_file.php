
<?php 
session_start();
?>
<!DOCTYPE html>

<meta charset="utf-8">
<html>
<title>Page d'acceuil</title>
<link rel="stylesheet" type="text/css" href="cssflexpa.css">
<body>

<div class="container">




   
    <div class="flexbody">

      


    <div class="menuLeft item">

      

    <?php
    include("menu_verticale.php")
    ?>

      <div align="center">
        <br><br><br><br><br>
                <a href="FAQ.php">FAQ</a> <br>
                <a href="aide.php">Aide</a> <br>
                <a href="nous_contacter.php">Nous contacter</a> <br>
        </div>




    
    

      </div>

      <div class="content item">

    <div class="menuh">

      <?php
    include("menu_horizontal.php")
    ?>
      </div>

<br><br>
      <fieldset class="modif_profil">
      <fieldset> <legend><h2>Tous les utilisateur dans la table</h2></legend>
<?
$con = new mysqli('localhost','root','root','espacemembre') or die('connecting failed: ".$con->connect_error');
$sql= "SELECT * FROM utilisateur";
$result= $con->query($sql) or die('cant be select');
$result_num_rows= mysqli_num_rows($result);
if ($result_num_rows > 0)
 {
    // output data of each row
    ?><table border="px1" width="100%">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Prenom</th>
<th>Mail</th>
<th>Pseudo</th>
</tr>
<?
    while($row = $result->fetch_assoc()) 
    {?>

<tr>
<td width="20%"><?
        echo $row["id"];?></td><td width="20%"><?
        echo  $row["nom"];?></td><td width="20%"><?
        echo  $row["prenom"];?></td><td width="20%"><?
        echo $row['mail'];?></td><td width="20%"><?
        echo $row['pseudo'];
        ?></td></tr>
        <?
    }?></table><?
} 
else 
{
    echo "0 results";
}
if (isset($_POST['submit']))
 {
	$pseudo = $_POST['pseudo'];
	$sqll= "DELETE FROM utilisateur Where pseudo='$pseudo'";
	$result_delete= $con->query($sqll) or die('failed delection');
}

?>
</fieldset>
<form action="" method="post">
pseudo:	<input type="text" name="pseudo" value="">
<input type="submit" name="submit" class="bouton_modif" value="submit">
</form>

      </fieldset>
    
</div>
</body>



</html>
