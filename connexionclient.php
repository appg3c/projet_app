


<html>
      <link rel="stylesheet" href="cssflexpa.css">

   <head>
      <title>Page connexion divercity</title>
      <meta charset="utf-8">
   </head>
   <body>
<header>


   
      <br><br>
     
</header>
<div align="center">

<img src="img/header.png" class="logogeneral" width="250px" height="275px">
</div>
      <div align="center">
      <br><br>
         <fieldset class="connexion">
            <legend><h2>Connexion</h2><h1>Divercity</h1></legend> 
               <br />
                  <fieldset class="conn1">
                     <legend><h3 color='green'>Informations enregistrées ! Veuillez vous connecter </h3></legend>
                     <form method="POST" action="php_verif_conn_to_bdd.php">
                        <table>
                        <p></p>
                        <p></p>
                           <tr>
                              <td align="right">
                                 <label for="mail"> Adresse mail :</label>
                              </td>
                              <td>
                                 <input type="email" name="mail" placeholder="Mail" required /></br>
                              </td>
                           </tr>

                           <tr>
                              <td align="right">
                                 <label for="mail"> Mot de passe :</label>
                              </td>
                              <td>
                                 <input  type="password" name="password" placeholder="Mot de passe" required />
                              </td>
                           </tr>

                           <tr>
                              <td align="center">
                                 <br />
                                    <input  class="bouton_modif" type="submit" name="formconnexion" value="Se connecter" /> </br>
                                                                  
                                </td>
                           </tr>
                           <tr>
                              <td>
                              </td>
                              <td>

                              </td>
                           </tr>
                        </table>
                     </form>
                     <?php
                     if(isset($erreur)) {
                        echo '<font color="red">'.$erreur."</font>";
                     }
                     ?>
                  </fieldset>
      </fieldset>
      </div>

    <div align="center">
      <br>
        <a href="mdp_oublie.php" class="hov"> Mot de passe oublié</a>
      </div>

      
   </body>
</html>