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
 
     <fieldset>
	     <legend><h2> Informations domicile</h2></legend>		
		Nombre de pieces :
		<select name="nbrepieces" id="nbrepieces" onChange="location = this.options[this.selectedIndex].value;">
	       <option> </option>
           <option value="homeinfo4.php">4 </option>
           <option value="homeinfo2.php">5</option>
           <option value="homeinfo3.php">6</option>
           <option value="homeinfo1">7</option>
           <option value="homeinfo1.php">8</option>
           <option value="Chambre 2">9</option>
           <option value="Chambre 3">10</option>
       </select></br>
    </fieldset>
    
   
</fieldset>
    
</div>


</body>



</html>