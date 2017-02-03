<?php
class connect_database
{
	var $host;
	var $username;
	var $password;
	var $bd;
	var $con;
	function __construct($host,$username,$password,$bd)
	{
		$this->host=$host;
		$this->username=$username;
		$this->password=$password;
		$this->bd= $bd;
		$this->con = new mysqli($host,$username,$password,$bd);
		if ($con->connect_error) 
    	{
    		die("connecting failed: ".$con->connect_error);
    	}
    }
    function getConnection()
    {
    	return $this->con;
    }
}
?>