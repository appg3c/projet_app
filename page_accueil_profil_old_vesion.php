 <?session_start();
 include("update_confidentialite.php");
?>


<fieldset class="field_profil">

  <br>

  <legend><h2> Modifier son profil : </h2></legend>

  <legend><h2> Informations personnelles :</h2></legend>

  <br>
  <h3> Completer son profil</h3>
    

    <form action="update_confidentialite.php" method="POST">
  <label for="ancmail"> Pseudo : </label><br />
    <input type="text" name="ancmail" value="<?echo $_SESSION['pseudo'];?>" readonly="readonly"/> <span class="error"> </br>
  <label for="nvmail"> Mail : </label><br />
    <input type="text" name="nvmail" value="<?echo $_SESSION['mail'];?>" readonly="readonly"/> <span class="error"></br>
  <label for="ancmdp"> Nom :</label><br />

    <input type="text" name="entre_nom" placeholder="<?echo $_SESSION['entre_nom'];?>" value="" /><span class="error"> </br>
  <label for="mdp"> Prenom :</label><br />
    <input type="text" name="entre_prenom" placeholder="<?echo $_SESSION['entre_prenom'];?>" value="" /><span class="error"></span> </br>
   <br><br>
     <fieldset>
       <legend><h3> Modifier son mot de passe</h3></legend>   
            <label for="nombredepersonne">Ancien mot de passe :</label> </br>
            <input type="text" placeholder="Ancien mot de passe" name="old_password" value="<?echo $_SESSION['password'];?>"></br>
            <label for="nombredepiece">Nouveau mot de passe :</label></br>
            <input type="password" placeholder="Nouveau mot de passe" name="new_password"></br>
    </fieldset>

    
        </br>
        <input class="bouton_modif" type="submit" name="submit" value="Enregistrer les modifications" /></p>
  </form>
  <br>
  <fieldset>
          <legend><h3>Votre photo</h3></legend>
          <label for="avatar">Modifier votre image de contact :
          </label><input type="file" name="avatar" id="avatar" />(Taille max : 500Ko)<br />       
      </fieldset>     
    
  
    <form action="updateprofil.php" method="POST">
  <label for="ancmail"> Ancien mail :</label><br />
    <input type="email" name="ancmail" placeholder="Ancien mail" required /> <span class="error">*</span> </br>
  <label for="nvmail"> Nouveau mail :</label><br />
    <input type="email" name="nvmail" placeholder="Nouveau mail" required/> <span class="error">*</span></br>
  <label for="ancmdp"> Ancien mot de passe :</label><br />
    <input type="password" name="ancmdp" placeholder="Ancien mot de passe" required/><span class="error">*</span> </br>
  <label for="mdp"> Nouveau mot de passe :</label><br />
    <input type="password" name="nvmdp" placeholder="Nouveau mot de passe" required/><span class="error">*</span> </br>
  <label for="nombredemaison">Nombre de maison:</label>
                <select name="Type Utilisateur">
                <option value="choix1"></option>
                <option value="choix1">1</option>
                  <option value="choix2">2</option>
                  <option value="choix3">3</option>
                  <option value="choix4">4</option>
                  <option value="choix1">6</option>
                  <option value="choix2">7</option>
                  <option value="choix3">8</option>
                  <option value="choix4">9</option>
                  </select>
      <p><span class="error">* Champs importants.</span></p>
   </fieldset>  
   <br><br><br>
     <fieldset class="field_profil">
       <legend><h2> Informations domicile</h2></legend>   
            <label for="nombredepersonne">Nombre de personne :</label> </br>
            <input type="text" placeholder="Combien êtes vous ?" name="nombredepersonne"></br>
            <label for="nombredepiece">Nombre de pièces :</label></br>
            <input type="text" placeholder="nombre de pieces" name="nombredepiece"></br>
              <label for="superficie">Superficie :</label></br>
            <input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
            <label for="typedepicece">Type de pièce:</label></br>
            <input type="text" placeholder="Type de pièce" name="nombredepersonne"></br>

    </fieldset>

    
        </br>
        <input  type="submit" name="formeinscription" class="bouton_modif" value="Enregistrer les modifications" /></p>
  </form>