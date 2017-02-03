<h2 align="center"> CHAMBRE PARENTALE </h2>

<div align=center>
    <p>
    <label for="Pieces"><h3>Choisir la piece :</h3></label><br />
       <select name="Pieces" id="pieces" onChange="location = this.options[this.selectedIndex].value;">
         <option> </option>
           <option value="cuisine.php">Cuisine </option>
           <option value="salon.php">Salon</option>
           <option value="salledebain1.php">Salle de bain 1</option>
           <option value="Salle de bain 2">Salle de bain 2</option>
           <option value="parent.php">Chambre parentale</option>
           <option value="Chambre 2">Chambre 2</option>
           <option value="Chambre 3">Chambre 3</option>
           <option value="hall.php">Hall</option>
       </select>
<br><br>
      
<body>    
<p> <fieldset>
    <div class='fen1'><form action="donneescapteurs.php" method="POST">
      <label for "Température"> <strong>Température :</strong></label></br><br>
      <input type="number" name="temperature" min="18" max="30" step="0.5" value="20"> °C </br>
    <label for "Humidité"> <strong>Humidité :</strong></label></br>
      <input type="number" name="humidite" min="30" max="60" step="1" value="60"> % </br>
</p></fieldset> 
<p><fieldset>
    <strong>Lumières: </strong></br>
    <input type="radio" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />
    <input type="radio" name="Lampe2" id="Lampe2" /> <label for="Lampe2">Lampe 2</label><br />
    <input type="radio" name="Lampe3" id="Lampe3" /> <label for="Lampe3">Lampe 3</label><br />
</p></fieldset><br>
<fieldset>
    <p><h3> Qualité d'air:</h3> </br>
    <strong> Intérieur :</strong> <z>Bonne</z> </br>
    <strong>Extérieur :</strong> <y>Moyenne</y> </br>
    </p></fieldset><br>
    <fieldset>
    <p> <label for "Fenetre 1"> <strong>Fenetre 1:</strong> </label></br>
       Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1"value="0" /> Ouverte </br>
    <label for "Fenetre 2"><strong>Fenetre 2:</strong>  </label></br>
    Fermée <input type="range" name="Fenetre2" min="0" max="1" step="1" /> Ouverte </br> </p>
    <p> <label for "Volet 1"><strong> Volet 1:</strong> </label></br> 
    Fermé <input type="range" name="Volet1" min="0" max="1" step="1" value="0"/> Ouvert </br>
    <label for "Volet 2"><strong> Volet 2:</strong> </label></br>
    Fermé <input type="range" name="Volet2" min="0" max="1" step="1"  /> Ouvert </br> </p>
    <p> <label for "porte principale"><strong> Porte principale:</strong> </label></br> 
    Fermée <input type="range" name="Porte principale" min="0" max="1" step="1" value="0" /> Ouverte </br>
      </p></fieldset><br>
    <input type="submit" value="Enregistrer"/> </div>
  
      
      
    </form> 
    </div>