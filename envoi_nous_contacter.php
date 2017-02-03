<?php 
 // on récupere lesd onnées entrées dans le formulaire.
$mail=htmlspecialchars($_POST['mail']);
$objet=htmlspecialchars($_POST['objet']);
$message=htmlspecialchars($_POST['message']);

//voici la version Mine par défaut.
$headers = "MIME-Version: 1.0\r\n"; 

//ici on détermine le mail en format text par défaut.
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

//formule magique qui donne 'adresse de celui qui envoie et celui qui reçoit.' 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="thibaultgouvier@gmail.com"; //faut remplacer par notre adresse mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) 
{ // foncrion mail qui envoie un mail.. 
$emailsent="Votre mail a été envoyé<br>"; 
} 
else 
{ 
$eror "Une erreur s'est produite"; 
} 
?></p>
<p align="center">veuillez cliquer <a href="marquer l'adresse du site.php">ici</a> pour retourner à la page d'accueil.</p>