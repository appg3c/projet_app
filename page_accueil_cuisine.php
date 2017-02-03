<div align=center>
    <p>
	  <label for="Pieces"><h3>Choisir la piece :</h3></label><br />
       <select name="Pieces" id="pieces" onChange="location = this.options[this.selectedIndex].value;">
	       <option> </option>
           <option value="cuisine.php"> <?php echo $_SESSION['nompiece1'] ?> </option>
           <option value="salon.php"><?php echo $_SESSION['nompiece2'] ?></option>
           <option value="salledebain1.php"><?php echo $_SESSION['nompiece3'] ?></option>
           <option value="Salle de bain 2"><?php echo $_SESSION['nompiece4'] ?></option>
           <option value="parent.php"><?php echo $_SESSION['nompiece5'] ?></option>
       </select>
<br><br>
			
<body>		
<p>	<fieldset>
<div class='fen1'><form action="donneescapteurs.php" method="POST">
<?php
    if (isset($_SESSION['case12'])){
		echo '<label for "Température"> <strong>Température :</strong></label></br><br>
	    <input type="number" name="temperature" min="18" max="30" step="0.5"> °C </br>';
	}
	else {
		echo 'Pas de capteur de temperature dans cette piece</br></br>';
	}	
?>
<?php
    if (isset($_SESSION['case11'])){
		echo '<label for "Humidité"> <strong>Humidité :</strong></label></br>
	    <input type="number" name="humidite" min="30" max="60" step="1"> % </br>';
	}
    else {
        echo "Pas de capteur d'humidite dans cette piece </br>";
	}
?>	
</p></fieldset>	
<p><fieldset>
<strong>Lumières: </strong></br>
<?php
    if ($_SESSION['nbrelampe1'] == 1  && isset($_SESSION['case18'])){
		echo '<input type="radio" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />';
	}
	else if ($_SESSION['nbrelampe1'] == 2 && isset($_SESSION['case18'])){
		echo '<input type="radio" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />
		<input type="radio" name="Lampe2" id="Lampe2" /> <label for="Lampe2">Lampe 2</label><br />';
	}
	else if ($_SESSION['nbrelampe1'] == 3 && isset($_SESSION['case18'])){
		echo '<input type="radio" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />
		<input type="radio" name="Lampe2" id="Lampe2" /> <label for="Lampe2">Lampe 2</label><br />
		<input type="radio" name="Lampe3" id="Lampe3" /> <label for="Lampe3">Lampe 3</label><br />';
	}

	else {
		echo "Pas de lampe dans cette piece";
	} 
?>	
</p></fieldset><br>
<fieldset>
<p><h3> Qualité d'air:</h3> </br>
<?php
    if (isset($_SESSION['case13'])){
		echo "<strong> Intérieur :</strong> <z>Bonne</z> </br>
		<strong>Extérieur :</strong> <y>Moyenne</y> </br>";
	}
	else {
		echo "Pas de capteur de qualité d'air dans cette piece";
	}
?>	
		</p></fieldset><br>
		<fieldset>
		<?php
		if ($_SESSION['nbrefen1'] == 1 && isset($_SESSION['case16'])) {
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1" /> Ouverte </br>';
		}
		elseif ($_SESSION['nbrefen1'] == 2&& isset($_SESSION['case16'])) {
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1" /> Ouverte </br>
		 <p> <label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre2" min="0" max="1" step="1" /> Ouverte </br>';
		}
		elseif ($_SESSION['nbrefen1'] == 3&& isset($_SESSION['case16'])) {
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1" /> Ouverte </br>
		 <p> <label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre2" min="0" max="1" step="1" /> Ouverte </br>;
		 <p> <label for "Fenetre 3"> <strong>Fenetre 3:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre3" min="0" max="1" step="1" /> Ouverte </br>';
		}
		elseif ($_SESSION['nbrefen1'] == 4&& isset($_SESSION['case16'])) {
			echo '<p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1" /> Ouverte </br>
		 <p> <label for "Fenetre 2"> <strong>Fenetre 2:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre2" min="0" max="1" step="1" /> Ouverte </br>;
	     <p> <label for "Fenetre 3"> <strong>Fenetre 3:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre3" min="0" max="1" step="1" /> Ouverte </br>;
		 <p> <label for "Fenetre 4"> <strong>Fenetre 4:</strong> </label></br>
	     Fermée <input type="range" name="Fenetre4" min="0" max="1" step="1" /> Ouverte </br>';		 
		}
		else {
			echo'Pas de fenetre connectée dans cette piece </br></br>';
		}	
		
		
		
	    if ($_SESSION['nbrevolet1'] == 1&& isset($_SESSION['case15'])) {
			echo '<label for "Volet 1"><strong> Volet 1:</strong> </label></br> 
		Fermé <input type="range" name="Volet1" min="0" max="1" step="1" /> Ouvert </br>';
		}
		elseif ($_SESSION['nbrevolet1'] == 2&& isset($_SESSION['case15'])) {
			echo '<label for "Volet 1"><strong> Volet 1:</strong> </label></br> 
		Fermé <input type="range" name="Volet1" min="0" max="1" step="1" /> Ouvert </br>
			<label for "Volet 2"><strong> Volet 2:</strong> </label></br>
		Fermé <input type="range" name="Volet2" min="0" max="1" step="1" /> Ouvert </br> </p>';
		}
		elseif ($_SESSION['nbrevolet1'] == 3&& isset($_SESSION['case15'])) {
			echo '<label for "Volet 1"><strong> Volet 1:</strong> </label></br> 
		Fermé <input type="range" name="Volet1" min="0" max="1" step="1" /> Ouvert </br>
			<label for "Volet 2"><strong> Volet 2:</strong> </label></br>
		Fermé <input type="range" name="Volet2" min="0" max="1" step="1" /> Ouvert </br> </p>
		<label for "Volet 3"><strong> Volet 3:</strong> </label></br>
		Fermé <input type="range" name="Volet3" min="0" max="1" step="1" /> Ouvert </br> </p>';
		}
		elseif ($_SESSION['nbrevolet1'] == 4&& isset($_SESSION['case15'])) {
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
			echo'Pas de volet connecté dans cette piece </br></br>'; 
		}	
		
		if ($_SESSION['nbreporte1'] == 1&& isset($_SESSION['case17'])) {
			echo '<p> <label for "porte principale"><strong> Porte principale:</strong> </label></br> 
		Fermée <input type="range" name="Porte principale" min="0" max="1" step="1" /> Ouverte </br>';
		}
		elseif ($_SESSION['nbreporte1'] == 2&& isset($_SESSION['case17'])) {
			echo '<p> <label for "porte principale"><strong> Porte principale:</strong> </label></br> 
		Fermée <input type="range" name="Porte principale" min="0" max="1" step="1" /> Ouverte </br>
			<p> <label for "porte secondaire 1"><strong> Porte secondaire 1:</strong> </label></br> 
		Fermée <input type="range" name="Porte secondaire 1" min="0" max="1" step="1" /> Ouverte </br>';
		}
		elseif ($_SESSION['nbreporte1'] == 3&& isset($_SESSION['case17'])) {
			echo '<p> <label for "porte principale"><strong> Porte principale:</strong> </label></br> 
		Fermée <input type="range" name="Porte principale" min="0" max="1" step="1" /> Ouverte </br>
			<p> <label for "porte secondaire 1"><strong> Porte secondaire 1:</strong> </label></br> 
		Fermée <input type="range" name="Porte secondaire 1" min="0" max="1" step="1" /> Ouverte </br>
		<p> <label for "porte secondaire 2"><strong> Porte secondaire 2:</strong> </label></br> 
		Fermée <input type="range" name="Porte secondaire 2" min="0" max="1" step="1" /> Ouverte </br>';
		}
		else {
			echo "Pas de porte connectée dans cette piece </br></br>";
		}
?>	
		
		
		<input type="submit" value="Enregistrer"/> </div>
	
		  
		  
	  </form>	
	  </div>