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