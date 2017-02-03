<?php

if (isset($_POST['forminscription']) && $_POST['forminscription'] == 'Je m\'inscris') 
{
   if ($_POST['mail'] != $_POST['mail2']) 
   {
      $erreur = 'Les adresses mail ne correspondent pas ! .';
   }

   elseif ($_POST['mdp'] != $_POST['mdp2']) {
      $erreur = 'Les  mots de passe ne correspondent pas ! .';
   }
   else 
   {
      $bdd = new PDO('mysql:host=localhost;dbname=espacemembre', 'root', 'root');// cela revient au meme :) 
         //là on s'est connecté à la base de données



         $pseudo = htmlspecialchars($_POST['pseudo']);
         $mail = htmlspecialchars($_POST['mail']);
         $mail2 = htmlspecialchars($_POST['mail2']);
         $password = md5($_POST['mdp']);
         $mdp2 = md5($_POST['mdp2']);

         $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
         $reqmail->execute(array($mail));
         $mailexist = $reqmail->rowcount();
         if ($mailexist == 0) 
         {
         //on affecte des valeurs aux variables 


            $reqbdd=$bdd->prepare('INSERT INTO utilisateur(pseudo,mail,password) VALUES (?,?,?)');
            // on previent notre base de données qu'on va mettre des valeurs dedans                  
            $reqbdd->execute(array($pseudo, $mail, $password));
            // la on met les valeurs dedans ( array c'est un tableau donc en fait on les met dans un tableau)
             
            header ("location:homeinfo.php") ;
            
            $reqbdd->CloseCursor();
            
         }

         else
         {
            $erreur = "L'adresse mail entrée est dejà utilisée";
         }
        
   }
}



require ("inscriptiondivercity.php");
         //je change le code donc ce message est là pour revenir au debut
?>
   