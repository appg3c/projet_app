<?php
	$dbname= "espacemembre";
	$host= "localhost";
	$user= "root";
	$pass= "root";

	$bdd=new PDO("mysql:host=$host; dbname=$dbname","$user","$pass");
// on se connecte à la base de données et cette page va de paire avec le formulaire1
?>