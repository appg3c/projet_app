<?php
        include 'connectionbase.php';


// Si tout va bien, on peut continuer


// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM programme');



?>

<?php
while ($donnees = $reponse->fetch())

{

?>

    <p>

    

    Vous avez programmé une température de <strong><?php echo $donnees['valeur']; ?> </strong>degrés<br />

    Ce programme fonctionnera du<strong> <?php echo $donnees['jour_debut']; ?> </strong><strong><?php echo $donnees['mois_debut']; ?></strong> au <strong><?php echo $donnees['jour_fin']; ?></strong><strong> <?php echo $donnees['mois_fin']; ?></strong><br />

    

<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>