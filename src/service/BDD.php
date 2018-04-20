<?php

namespace service;

class BDD extends \PDO
{
 	public function __construct($dsn = 'mysql:host=localhost;dbname=iia', $username = 'root', $password = null, array $options = null)
 	{
 		try
 		{
 			parent::__construct($dsn, $username, $password, $options);
 		}
 		
 		catch(PDOException $ex) 
		{
		
  		echo 'Erreur : '.$ex->getMessage();
		}
 	}
}



?>