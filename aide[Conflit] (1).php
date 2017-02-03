

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
        <br><br><br><br><br>
                <a href="FAQ.php">FAQ</a> <br>
                <a href="aide.php">Aide</a> <br>
                <a href="nous_contacter.php">Nous contacter</a> <br>
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
        <?php 
        include("page_accueil_aide.php");

        ?>
      </fieldset>
    
</div>


</body>



</html>