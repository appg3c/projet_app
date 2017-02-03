<?php 
session_start();
include("nbrecapteurs.php");
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
        <?php
              include("bas_de_page.php")
        ?>
        </div>




    
    

      </div>

      <div class="content item">

    <div class="menuh">

      <?php
    include("menu_horizontal.php")
    ?>
      </div>

<br><br>
      <fieldset class="field_conso">

<div align=center>
    <p>
	  <label for="Pieces"><h3>Choisir la piece :</h3></label><br />
       <select name="Pieces" id="pieces" onChange="location = this.options[this.selectedIndex].value;">
	       <option> </option>
           <option value="cuisine.php"> <?php include ('nompiece1.php'); ?> </option>
           <option value="salon.php"><?php include ('nompiece2.php'); ?></option>
           <option value="salledebain1.php"><?php include ('nompiece3.php'); ?></option>
           <option value="salledebain2.php"><?php include ('nompiece4.php'); ?></option>
       </select>
<br><br>
		<h2> <?php include ('nompiece2.php'); ?> </h2>		
<body>		
<p>	<fieldset>
<div class='fen1'><form action="donneescapteurs2.php" method="POST">

<label for "Température"> <strong>Température :</strong></label></br><br>
	    <input type="number" name="temperature" min="18" max="30" step="0.5" value=<?php include ('valeurs2.php'); ?>> °C </br></br>


<label for "Humidité"> <strong>Humidité :</strong></label></br></br>
	    <input type="number" name="humidite" min="30" max="60" step="1" value="60"> % </br>

</p></fieldset>	
<p><fieldset>
<strong>Lumières: </strong></br>
<?php
    if ($_SESSION['nbrelampe2'] == 1 ){
		echo'Etat Actuel de la lampe1:';
		 include ("lum1.php");
			echo '<p> <label for "Lampe 1"> <strong>Lampe 1:</strong> </label></br>
	      <select name="lampe1" id="lampe1" >
	       <option> </option>
           <option value="Allumee"> Allumer </option>
           <option value="Eteinte"> Eteindre </option>
		  </select>';
	}
	else if ($_SESSION['nbrelampe2'] == 2 ){
		echo 'Etat Actuel de la lampe1:';
		 include ("lum1.php");
		echo' </BR> </BR>Etat Actuel de la lampe2:';		
         include ("lum2.php"); 
			echo '<p> <label for "Lampe 1"> <strong>Lampe 1:</strong> </label></br>
	      <select name="lampe1" id="lampe1" >
	       <option> </option>
           <option value="Allumee"> Allumer </option>
           <option value="Eteinte"> Eteindre </option>
		  </select>
		  <p> <label for "Lampe 2"> <strong>Lampe 2:</strong> </label></br>
	      <select name="lampe2" id="lampe2" >
	       <option> </option>
           <option value="Allumee"> Allumer </option>
           <option value="Eteinte"> Eteindre </option>
		  </select>';
	}
	else if ($_SESSION['nbrelampe2'] == 3){
		echo '<input type="checkbox" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />
		<input type="checkbox" name="Lampe2" id="Lampe2" /> <label for="Lampe2">Lampe 2</label><br />
		<input type="checkbox" name="Lampe3" id="Lampe3" /> <label for="Lampe3">Lampe 3</label><br />';
	}

	else {
		echo "Pas de lampe dans cette piece";
	} 
?>	
</p></fieldset><br>
<fieldset>
<p><h3> Qualité d'air:</h3> </br>
 <strong> Intérieur :</strong> <z>Bonne</z> </br>
		<strong>Extérieur :</strong> <y>Moyenne</y> </br>

		</p></fieldset><br>
		<fieldset>
		<?php
		if ($_SESSION['nbrefen1'] == 1) {
			echo'Etat Actuel de la fenetre1:';
		 include ("fen5.php");
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	      <select name="fenetre5" id="fenetre5" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>';
		}
		elseif ($_SESSION['nbrefen1'] == 2) {
			echo'Etat Actuel de la fenetre1:';
		 include ("fen5.php");
            echo' </BR> </BR>Etat Actuel de la fenetre2:';		
         include ("fen6.php");			
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label>
	      <select name="fenetre5" id="fenetre5" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select> 
		 <p><label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label>
	     <select name="fenetre6" id="fenetre6" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbrefen1'] == 3) {
			echo'Etat Actuel de la fenetre1:';
		 include ("fen5.php");
            echo' </BR> </BR>Etat Actuel de la fenetre2:';		
         include ("fen6.php");
            echo' </BR> </BR>Etat Actuel de la fenetre3:';		
         include ("fen7.php");		 
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	      <select name="fenetre5" id="fenetre5" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select> 
		 <p> <label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label></br>
	     <select name="fenetre6" id="fenetre6" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>
		 <p> <label for "Fenetre 3"> <strong>Fenetre 3:</strong> </label></br>
	     	     <select name="fenetre7" id="fenetre7" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbrefen1'] == 4) {
			echo'Etat Actuel de la fenetre1:';
		 include ("fen1.php");
            echo' </BR> </BR>Etat Actuel de la fenetre2:';		
         include ("fen2.php");
            echo' </BR> </BR>Etat Actuel de la fenetre3:';		
         include ("fen3.php");		 
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	      <select name="fenetre1" id="fenetre1" >
	       <option> </option>
           <option value="Fermée"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select> 
		 <p> <label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label></br>
	     <select name="fenetre2" id="fenetre2" >
	       <option> </option>
           <option value="Fermée"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>
		 <p> <label for "Fenetre 3"> <strong>Fenetre 3:</strong> </label></br>
	     	     <select name="fenetre3" id="fenetre3" >
	       <option> </option>
           <option value="Fermée"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>
		 <p> <label for "Fenetre 4"> <strong>Fenetre 4:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre4" min="0" max="1" step="1" value= include ("fen1.php"); /> Ouverte </br>';		 
		}
		else {
			echo'Pas de fenetre connectée dans cette piece </br></br>';
		}
		
		
		
	   if ($_SESSION['nbrevolet1'] == 1) {
			echo'Etat Actuel du volet 1:';
		 /*include ("vol1.php");*/
			echo '<p> <label for "Volet 1"> <strong>Volet 1:</strong> </label></br>
	      <select name="volet1" id="volet1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbrevolet1'] == 2) {
			echo'Etat Actuel du volet 1:';
		 /*include ("vol1.php");*/
		 echo' </BR> </BR>Etat Actuel du volet 2:';		
           /*include ("vol2.php");*/
			echo '<p> <label for "Volet 1"> <strong>Volet 1:</strong> </label></br>
	      <select name="volet1" id="volet1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Volet 2"> <strong>Volet 2:</strong> </label></br>
	      <select name="volet2" id="volet2" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbrevolet1'] == 3) {
			echo'Etat Actuel du volet 1:';
		 /*include ("vol1.php");*/
		 echo' </BR> </BR>Etat Actuel du volet 2:';		
           /*include ("vol2.php");*/
		   echo'</BR> Etat Actuel du volet 3:';
		 /*include ("vol3.php");*/
			echo '<p> <label for "Volet 1"> <strong>Volet 1:</strong> </label></br>
	      <select name="volet1" id="volet1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Volet 2"> <strong>Volet 2:</strong> </label></br>
	      <select name="volet2" id="volet2" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Volet 3"> <strong>Volet 3:</strong> </label></br>
	      <select name="volet3" id="volet3" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbrevolet1'] == 4) {
			echo '<label for "Volet 1"><strong> Volet 1:</strong> </label></br> 
		Fermé <input type="range" name="Volet1" min="0" max="1" step="1" /> Ouvert </br>
			<label for "Volet 2"><strong> Volet 2:</strong> </label></br>
		Fermé <input type="range" name="Volet2" min="0" max="1" step="1" /> Ouvert </br> </p>
		<label for "Volet 3"><strong> Volet 3:</strong> </label></br>
		Fermé <input type="range" name="Volet3" min="0" max="1" step="1" /> Ouvert </br> </p>
		<label for "Volet4 "><strong> Volet 4:</strong> </label></br>
		Fermé <input type="range" name="Volet4" min="0" max="1" step="1" /> Ouvert </br> </p>';
		}
		else {
			echo'</br>Pas de volet connecté dans cette piece </br></br>'; 
		}	
		
		if ($_SESSION['nbreporte1'] == 1) {
			echo'Etat Actuel de la porte 1:';
		 /*include ("porte1.php");*/
			echo '<p> <label for "Porte 1"> <strong>Porte 1:</strong> </label></br>
	      <select name="porte1" id="porte1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbreporte1'] == 2) {
			echo'Etat Actuel de la porte 1:';
		 /*include ("porte1.php");*/
		 echo' </BR> </BR>Etat Actuel du volet 2:';		
           /*include ("porte2.php");*/
			echo '<p> <label for "Porte 1"> <strong>Porte 1:</strong> </label></br>
	      <select name="porte1" id="porte1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Porte 2"> <strong>Porte 2:</strong> </label></br>
	      <select name="porte2" id="porte2" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		elseif ($_SESSION['nbreporte1'] == 3) {
			echo'Etat Actuel de la porte 1:';
		 /*include ("porte1.php");*/
		 echo' </BR> </BR>Etat Actuel de la porte 2:';		
           /*include ("porte2.php");*/
		   echo'</BR> Etat Actuel de la porte 3:';
		 /*include ("porte3.php");*/
			echo '<p> <label for "Porte 1"> <strong>Porte 1:</strong> </label></br>
	      <select name="porte1" id="porte1" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Porte 2"> <strong>Porte 2:</strong> </label></br>
	      <select name="porte2" id="porte2" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select>
		  <p> <label for "Porte 3"> <strong>Porte 3:</strong> </label></br>
	      <select name="porte3" id="porte3" >
	       <option> </option>
           <option value="Fermee"> Fermer </option>
           <option value="Ouverte"> Ouvrir </option>
		  </select></br>';
		}
		else {
			echo "</br>Pas de porte connectée dans cette piece </br></br>";
		}
?>	
		
		
		</br><input type="submit" value="Enregistrer"/> </div>
	
		  
		  
	  </form>	
	  </div>
	      <div align=center>
    <footer>
        <br>
                <a href="FAQ.php">FAQ</a> <br>
                <a href="aide.php">Aide</a> <br>
        
    </footer> 
    </div>  

</body>		
</html>