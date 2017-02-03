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


    <div class="header item" align="center">

    


    <div class="menuh" align="center">
      <ul class="menu_horizontal">
        <li><a href="profil.php">Modifier son profil</a></li>
        <li><a href="#">Confidentialité</a></li>
        <li><a href="capteur_et_piece.php">Préférences</a></li>
        <li><a href="page_deco.php">Déconnexion</a></li>
      </ul>
      </div>

    </div>

   
    <div class="flexbody">

      


    <div class="menuLeft item">

    <img src="img/header.png" class="logogeneral" width="200px" height="210px">

    <ul class="menu_vert">
      <li><a href="paflex.php">Page d'Accueil</a></li>
      <li><a href="page_conso_principale.php">Consommation</a></li>
      <li><a href="capteurs.php">Paramètrages</a></li>
      <li><a href="page_programme.php">Programation</a></li>
    </ul>

      <div align="center">
        <br>
                <a href="FAQ.php" class="hov">FAQ</a> <br>
                <a href="aide.php" class="hov">Aide</a> <br>
                <a href="contact.php" class="hov">Nous contacter</a> <br>
        </div>


      </div>

      <div class="content item">
<fieldset class="field_conso"><legend><h2>Etat général de votre maison</h2></legend>
<div class="img_conso"><img src="img/maison_generale.png" width="220px" ></div>
      
          <ul class="bouton_conso">

          <li id="menu4"><a href="#"><img src="img/temp.png" width="50px" alt="thermo" ><br>Température <br><br><br>
      25°C
</a>

          </li>
          <li id="menu5"><a href="#"><img src="img/gout.png" width="50px" alt="eau" ><br>Humidité <br><br><br>
          60%
</a>
          </li>

          <li id="menu6"><a href="#"><img src="img/lamp.png" width="50px" alt="ampoule" ><br>Lumières <br><br><br>
          <font color ="red"> OFF </font>
</a>
          </li>

          <li id="menu7"><a href="#"><img src="img/qualite.png" width="50px" alt="qualite" ><br>Qualité d'air<br><br><br>
          <font color="green"> Bonne </font>
</a>
          </li>

          <li id="menu8"><a href="#"><img src="img/pres.png" width="50px" alt="présence" ><br>Présence<br><br><br>
          Aucune
</a>
          </li>

            <li id="menu9"><a href="#"><img src="img/fenetre.png" width="50px" alt="fenetre" ><br>Fenêtres<br><br><br>
          Fermées</a>
          </li>
          </ul>
    



      

    </div>
</fieldset>
    
</div>


</body>



</html>