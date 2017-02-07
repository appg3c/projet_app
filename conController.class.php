<?php
include(dirname(_FILE).'/libs/Model/connect_databaseModel.class.php');//调用连接数据库的文件(include le document module de connect la database.je cree un module pour connecter la database pour reutiliser plusfois. Comme si on veut query les donnes dans la database, il faut connecter la database. on emploie ce module est plus rapide et facile)
/**
* 
*/
class conController
{
	var $mail;
	var $password;
	var $data;
	function check()
	{
		if (!isset($_POST['submit'])) 
		{
			require_once(dirname(_FILE).'/libs/View/conView.class.php');//如果我们没有点击submist就弹出表格(si le button n'a pas ete clique, navigateur va afficher la formulaire de connexion)
		}
		else // on clique le button submit, excute les programme suivant.
		{
			include(dirname(_FILE).'/libs/Model/conModel.class.php');// include le module pour traiter le donnes que on a obtenu.
			$conn = new connect_database("localhost","root","root","mybd");// connect la database
			$con = $conn->getConnection();//obtenu la variation de interface
			$conModel= new conModel();//instance du module de traitement les donnes
			$mail=htmlspecialchars($_POST['client_name']);//obtenir le donnes remplir dans la formulaire
			$password=md5($_POST['client_password']);
			$data= $conModel->check_connect($con,$mail,$password);//mettre les donnes on a obtenu dans le methode check_connect pour assurer ce client est juste. pour ce faire, on a besoin de compare les donnes qui est renpli dans la formulaire par rapport les truc dans la database.
			if ($data >0)//si il n'existe pas dans la database. on affichen un reponse qui est le document view suivant.
			{
				require_once(dirname(_FILE)."/libs/View/ceshi.php");
			}
			else// si il exite, on affiche autre document view.
			{
				require_once(dirname(_FILE)."/libs/View/ceshi2.php");
			}
		}
		
	}
}
/*$i= new conController();
$i->check();*///测试 test
?>