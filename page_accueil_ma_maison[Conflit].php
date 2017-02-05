<?php


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
<?php


$mail= $_SESSION['mail'];
$id_utilisateur=$_SESSION['id_utilisateur'];
$id=$id_utilisateur;



$sql_adresse="SELECT adresse FROM maison WHERE id= '$id'";
$result_adresse = $con->query($sql_adresse) or die('erreur');
$result_print_adresse = mysqli_fetch_array($result_adresse);
$adresse = $result_print_adresse[0];

$sql_code_postal="SELECT code_postal FROM maison WHERE id= '$id'";
$result_code_postal = $con->query($sql_code_postal) or die('erreur');
$result_print_code_postal = mysqli_fetch_array($result_code_postal);
$code_postal = $result_print_code_postal[0];

$sql_ville="SELECT ville FROM maison WHERE id= '$id'";
$result_ville = $con->query($sql_ville) or die('erreur');
$result_print_ville = mysqli_fetch_array($result_ville);
$ville = $result_print_ville[0];

$_SESSION['adresse']=$adresse;
$_SESSION['ville']=$ville;
$_SESSION['code_postal']=$code_postal;



//$numero_identification=$_POST['submitajoutcapteur']

//$reqclef_capteur=$con->prepare('INSERT INTO objets_connectes(numero_identification) VALUES (?)');
            // on previent notre base de données qu'on va mettre des valeurs dedans                  
            //$reqclef_capteur->execute(array($numero_identification));


?>




<fieldset class="field_conso">
	<legend><h2>État de ma maison</h2></legend>
	
  <form action="" method="POST">
   <label for="affadresse"> Votre adresse: </label> 
   <?echo $_SESSION['adresse'];?> 
   <?echo $_SESSION['code_postal'];?>
   <?echo $_SESSION['ville'];?>

</fieldset>

<fieldset class="field_conso">
	<legend><h2>Ajouter un/des capteur(s)</h2></legend>
		<table>
               <tr>
                  <td align="right">
                     <label for="Pieces"><h3>Choisir la piece </h3></label>
                  </td>
                  <td>
                     <select name="Pieces" id="pieces" onChange="location = this.options[this.selectedIndex].value;" required>
					       <option > </option>
				           <option value="#"> <?php include ('nompiece1.php'); ?> </option>
				           <option value="#"><?php include ('nompiece2.php'); ?></option>
				           <option value="#"><?php include ('nompiece3.php'); ?></option>
				           <option value="#"><?php include ('nompiece4.php'); ?></option>
				       </select>
                  </td>
               </tr>
       
                <tr>
                  <td align="right">
                     <label for="Pieces"><h3>Type de capteurs à ajouter </h3></label>
                  </td>
                  <td>
                     <select name="Pieces" id="pieces" onChange="location = this.options[this.selectedIndex].value;" required>
					       <option> </option>
				           <option  name="capteur_temperature" value="#">Capteur Température </option>
				           <option name="capteur_lumiere" value="#">Capteur Lumière </option>
				           <option name="capteur_humidité" value="#">Capteur d'Humidité</option>
				           <option name="capteur_air" value="#">Captur d'Air</option>
				           <option name="capteur_presence" value="#">Captur Présence</option>
				           <option name="capteur_fenetre" value="#">Captur Fenêtre</option>
				     </select>
                  </td>
               </tr>

               <tr>
                  <td align="right">
          <form method="POST" action="page_accueil_ma_maison.php">
					<label for="numero_de_capteur">N° Capteur </label>    

				  </td>
                  <td>
             		<input type="text" placeholder="numero du capteur" name="numcapteur" value="" /></br>

                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <input type="submit" class="bouton_modif" name="submitajoutcapteur" value="Ajouter le capteur" /></br>
                  </td>
         </table>
</fieldset>

<fieldset class="field_conso">
	<legend><h2>Ajouter un pièce dans ma maison</h2></legend>
				<tr>
                 <td align="right">
                     <label for="Pieces"><h3>Choisir la piece :</h3></label>
                 </td>
                 <td>
                     <input type="text" placeholder="nom de la nouvelle pièce" name="newpiece" value="" />
                  </td>
               </tr>

	
            <tr>
                  <td align="right">
                     <input type="submit" class="bouton_modif" name="submitajoutpiece" value="Ajouter la pièce" /></br>
                  </td>

</fieldset>