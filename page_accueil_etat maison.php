<?session_start();
?>
<legend><h2>Etat général de votre maison</h2></legend>
<div class="img_conso"><img src="img/maison_generale.png" width="220px" ></div>
<div class="icones_cons" align="center"> 
          <ul class="bouton_conso" align="center">

          <li id="menu4"><a href="#"><img src="img/temp.png" width="50px" alt="thermo" ><br>Température <br><br><br>
      25°C
</a>

          </li>
          <li id="menu5"><a href="#"><img src="img/gout.png" width="50px" alt="eau" ><br>Humidité <br><br><br>
          60%
</a>
          </li>

          <li id="menu6"><a href="#"><img src="img/lamp.png" width="50px" alt="ampoule" ><br>Lumières <br><br><br><br>
           <?php  
     include ("lum1.php");
     
         // <font color ="red"> OFF </font>
     ?>
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

            <li id="menu9"><a href="#"><img src="img/fenetre.png" width="50px" alt="fenetre" ><br>Fenêtres<br><br><br><br>
          <?php
     
     include ("fen1.php");    
     ?>
</a>


          </ul>
</div>         



      

    </div>

    
<div class="consomm">



    <fieldset class="droitehaut">
      <legend><h3>Consommation générale</h3></legend>
      <img src="img/conso_hebdo.png" align="center" width="270px" >
    
    </fieldset>

<br /><br />



    <fieldset class="droitebas">
      <legend><h3>Caméra de surveillance</h3></legend>
      <video src="img/Vid.3gp" width="300px" loop autoplay></video>

    </fieldset>
</div>
