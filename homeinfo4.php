

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

      



      <div align="center">

        </div>




    
    

      </div>

      <div class="content item">

    <div class="menuh">


      </div>



    
<br><br><br>
     <fieldset class="field_conso">
	     <legend><h2> Informations domicile</h2></legend>
<form action="capteur_bdd.php" method="POST">		 
		Nombre de pieces :</br> </br>
		<select name="nbrepieces" id="nbrepieces" onChange="location = this.options[this.selectedIndex].value;">
           <option value="homeinfo4.php">4 </option>
           <option value="homeinfo2.php">5</option>
           <option value="homeinfo3.php">6</option>
           <option value="homeinfo1">7</option>
           <option value="homeinfo1.php">8</option>
           <option value="Chambre 2">9</option>
           <option value="Chambre 3">10</option>
           </select></br></br>

		       <fieldset class="typepiece">

		            <label for="superficie">Superficie :</label></br>
				    <input type="text" placeholder="Superficie" id="superficie1" name="superficie1"></br>
					Nom de la piece : <br>
					<input type="text" name="nompiece1"> <br>
					Nombre de fenetres : <br>
				    <input type="text"name="nbrefen1" > <br>
					Nombre de volets : <br>
					<input type="text"name="nbrevolet1" > <br>
					Nombre de portes : <br>
					<input type="text" name="nbreporte1" > <br>
					Nombre de lampes: <br>
					<input type="text" name="nbrelampe1" > <br>
			   </fieldset>	
					
              <fieldset class="typepiece">

		            <label for="superficie">Superficie :</label></br>
				    <input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
					Nom de la piece : <br>
					<input type="text" name="nompiece2"> <br>
					Nombre de fenetres : <br>
				    <input type="text"name="nbrefen2"> <br>
					Nombre de volets : <br>
					<input type="text"name="nbrevolet2"> <br>
					Nombre de portes : <br>
					<input type="text" name="nbreporte2"> <br>
					Nombre de lampes: <br>
					<input type="text" name="nbrelampe2" > <br>
			  </fieldset>
			  <fieldset class="typepiece">

		            <label for="superficie">Superficie :</label></br>
				    <input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
					Nom de la piece : <br>
					<input type="text" name="nompiece3"> <br>
					Nombre de fenetres : <br>
				    <input type="text"name="nbrefen3"> <br>
					Nombre de volets : <br>
					<input type="text"name="nbrevolet3"> <br>
					Nombre de portes : <br>
					<input type="text" name="nbreporte3"> <br>
					Nombre de lampes: <br>
					<input type="text" name="nbrelampe3" > <br>
			  </fieldset>
			  <fieldset class="typepiece">

		            <label for="superficie">Superficie :</label></br>
				    <input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
					Nom de la piece : <br>
					<input type="text" name="nompiece4"> <br>
					Nombre de fenetres : <br>
				    <input type="text"name="nbrefen4"> <br>
					Nombre de volets : <br>
					<input type="text"name="nbrevolet4"> <br>
					Nombre de portes : <br>
					<input type="text" name="nbreporte4"> <br>
					Nombre de lampes: <br>
					<input type="text" name="nbrelampe4" > <br>
			  </fieldset>
			  						<label for="nombredepersonne"></br>Nombre de personnes :</label> </br>
						<input type="text" placeholder="Combien êtes vous ?" name="nombredepersonne"><br> 
							</br><input type="submit" value="Enregistrer" class="bouton_modif" /> </div>
	</fieldset>


</form>
	
    

    
</div>


</body>



</html>