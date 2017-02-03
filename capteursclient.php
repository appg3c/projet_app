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
			
</fieldset>
    
</div>


</body>



</html>
