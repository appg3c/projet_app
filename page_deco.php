<?php
// la on se deconnecte donc c'est la base, pour se deconnecter on détruit les variables session et la session puis on est redirigé vers la page de connexion ! 
session_start();
$_SESSION = array();
session_destroy();
header("Location: formulaire_connexion.php");
?>