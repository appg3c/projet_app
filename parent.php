

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


    <div class="header item">
    <div id="header_item_left">
    <div class="itemleft">
    <div id="logo">
    <img src="img/logo.png" class="logodivercity" alt="divercity" width="100"><br>
      <h1 class="gauche">Divercity</h1>
    </div>
    <h3 class="hautgauche"> Solution de </h3><br><img src="img/domisep.png" class="logodomisep" alt="domisep" width="100"></h3>
    </div>
    </div>
    <div class="menuh">
      <?php
    include("menu_horizontal.php")
    ?>
      </div>

    </div>

   
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
      <fieldset class="field_conso">
        <?php 
        include("page_accueil_parent.php");

        ?>
      </fieldset>
    
</div>


</body>



</html>



</body>
</html>