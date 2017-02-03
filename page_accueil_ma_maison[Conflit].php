<?php
session_start();

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


$sql_adresse = "SELECT adresse FROM maison INNER JOIN utilisateur ON maison.id_maison=utilisateur.id_maison  "; 
//echo adresse
$result_adresse = $con->query($sql_adresse)or die("cant be select");
$result_print = mysqli_fetch_array($result_adresse);
$padresse = $result_print[0];
$_SESSION['adresse']=$adresse;




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