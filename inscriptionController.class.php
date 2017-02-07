<?php
include(dirname(_FILE).'/libs/Model/connect_databaseModel.class.php');
class inscriptionController
{


	function show()
	{
		

		
		if (!isset($_POST['submit'])) 
		{
			require_once(dirname(_FILE).'/libs/View/inscriptionView.class.php');
		}
		else
		{
			if ($_POST['mail'] != $_POST['mail2']) 
		   {
		      die('Les adresses mail ne correspondent pas ! ');
		   }

		   elseif ($_POST['mdp'] != $_POST['mdp2']) {
		      die($error='Les  mots de passe ne correspondent pas !');
		   }
		   else
		   {
				require(dirname(_FILE).'/libs/Model/inscriptionModel.class.php');
				//$name=$_POST['client_name'];
				//$password=$_POST['client_password'];
				$pseudo = htmlspecialchars($_POST['pseudo']);
		        $mail = htmlspecialchars($_POST['mail']);
		        $password = md5($_POST['mdp']);
				$i = new inscriptionModel();
				$conn = new connect_database("localhost","root","root","mybd");
				$con = $conn->getConnection();
				$result_check= $i->check_repeat($mail,$con);
				if ($result_check>0) {
					die("L'adresse mail entrée est dejà utilisée");
					# code...
				}
				else{
					$i->insert($pseudo,$mail,$password,$con);
					header("refresh:3;url=index.php?m=con&c=check");
					echo "attendez 3s";
				}
			}
		}
		
	}
}
?>