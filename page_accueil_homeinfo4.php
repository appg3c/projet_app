     <fieldset>
       <legend><h2> Informations domicile</h2></legend>
<form action="capteur_et_piece.php" method="POST">     
    Nombre de pieces :
    <select name="nbrepieces" id="nbrepieces" onChange="location = this.options[this.selectedIndex].value;">
           <option value="homeinfo4.php">4 </option>
           <option value="homeinfo2.php">5</option>
           <option value="homeinfo3.php">6</option>
           <option value="homeinfo1">7</option>
           <option value="homeinfo1.php">8</option>
           <option value="Chambre 2">9</option>
           <option value="Chambre 3">10</option>
           </select></br>


          <fieldset class="typepiece">
          <label for="typedepicece">Type de pièce:</label></br>
          <select name="nbrepieces" id="nbrepieces">
                  <option> </option>
                    <option value="">Cuisine </option>
                    <option value="">Salon</option>
                    <option value="">Chambre parentale</option>
                    <option value="">Chambre enfants</option>
                    <option value="">Salle de bain</option>
           </select></br>
                <label for="superficie">Superficie :</label></br>
            <input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
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
          <label for="typedepicece">Type de pièce:</label></br>
          <select name="nbrepieces" id="nbrepieces">
                  <option> </option>
                    <option value="">Cuisine </option>
                    <option value="">Salon</option>
                    <option value="">Chambre parentale</option>
                    <option value="">Chambre enfants</option>
                    <option value="">Salle de bain</option>
           </select></br>
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
          <label for="typedepicece">Type de pièce:</label></br>
          <select name="nbrepieces" id="nbrepieces">
                  <option> </option>
                    <option value="">Cuisine </option>
                    <option value="">Salon</option>
                    <option value="">Chambre parentale</option>
                    <option value="">Chambre enfants</option>
                    <option value="">Salle de bain</option>
           </select></br>
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
          <label for="typedepicece">Type de pièce:</label></br>
          <select name="nbrepieces" id="nbrepieces">
                  <option> </option>
                    <option value="">Cuisine </option>
                    <option value="">Salon</option>
                    <option value="">Chambre parentale</option>
                    <option value="">Chambre enfants</option>
                    <option value="">Salle de bain</option>
           </select></br>
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
        </fieldset> <br>
                    <label for="nombredepersonne">Nombre de personne :</label> </br>
            <input type="text" placeholder="Combien êtes vous ?" name="nombredepersonne"><br> <br>

  <input type="submit" value="Enregistrer"/> </div>
  </fieldset>
</form>