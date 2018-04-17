<?php

/**** Connexion à la base ******/

function getDb()
{
	$dsn = 'mysql:host=localhost;dbname=iia';
	$username = 'root';
	$password = '';
	$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
					);
	try
	{
		$db = new PDO($dsn, $username, $password, $options);
	}

	catch(PDOException $ex) 
	{
		
  		echo 'Erreur : '.$ex->getMessage();
	}

	return $db;
}


function getAllPromotion($db)
{
	$request_promo = 'SELECT * FROM promotion ORDER BY intitule';
	return $db->query($request_promo);
}

?>