
       <legend><h2> Informations domicile</h2></legend>  
       <fieldset>
       <p><h3>Bonjour, pour votre première venue sur Divercity, il vous est obligatoire de renseigner ces champs suivants : </p></h3>
       </fieldset>
       <fieldset>
      
         <legend><h2>Votre maison</h2></legend>
         <form method='post' action="renseignement_maison.php">
                  <tr>
            <td>
              <label for="nom_maison">Donnez un nom à votre maison:</label>
            </td>

            <td>
            <input type="varchar" placeholder="Maison principale" name="maison1" required>
            </td>
          </tr>
          </br>
          <tr>
            <td>
              <label for="adresse">Adresse:</label>
            </td>

            <td>
            <input type="varchar" placeholder="1 rue du bout" name="adresse" required>
            </td>
          </tr>
          </br>
          <tr>
            <td>
              <label for="code_postal">Code Postal:</label>
            </td>

            <td>
            <input type="int" placeholder="75000" name="code_postal" required>
            </td>
          </tr>
          </br>
          <tr>
            <td>
              <label for="ville">Ville:</label>
            </td>

            <td>
            <input type="varchar" placeholder="Paris" name="ville" required>
            </td>
          </tr>
          </br>
          <input type="submit" name="valider_le_mode" value="Je valide">
          </form>
          </fieldset>
          


    
    