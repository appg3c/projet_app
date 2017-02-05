<?php 
 session_start();
?> 

<html>
<head>
	<title>Nous contacter</title>
</head>
<body>
<div align="center"><strong>Nous Contacter</strong></div><br/>
<fieldset >

<legend align="center"><strong>Par Messagerie interne</strong></legend>
<table width="600" align="center"  >
<form action="envoi_nous_contacter.php" method="post"  name="formulaire">

<tr> 
<td ><div align="left">Votre mail:</div></td>
<td><input type="email" name="mail" size="45" maxlength="100" required></td>
</tr>
<tr> 
<td><div align="left">Sujet: </div></td>
<td><input type="text" name="objet" size="45" maxlength="100" required></td>
</tr>
<tr> 
<td><div align="left">Message: </div></td>
<td><textarea name="message" cols="50" rows="10" required></textarea></td>
</tr>
<tr> 
<td></td>
<td>
<input type="reset" name="effacer" class="bouton_modif" value=" Tout Effacer">

<input type="submit" name="formenvoyer" class="bouton_modif" value="Envoyer l'email">
</td>
</tr>
</form>
</table>
		<?php
            if(isset($emailsent)) 
            {
               echo '<font color="green">'.$emailsent."</font>";
            }
         ?>
         <?php
            if(isset($eror)) 
            {
               echo '<font color="red">'.$eror."</font>";
            }
         ?>
</fieldset>
<fieldset>
<legend align="center"><strong>Par téléphone</strong></legend>
<div align="center">
 Maintenance :<br /> 06 21 26 14 27 
</div>
</fieldset>
<fieldset>
<legend align="center"><strong>Par Email</strong></legend>
<div align="center">
 Maintenance :<br /> mainteance_divercity@gmail.com 
</div>
</fieldset>
</body>
</html>