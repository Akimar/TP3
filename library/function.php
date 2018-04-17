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

/****** Get de toutes les promotions *****/
function getAllPromotions($db)
{
	$request_promo = 'SELECT * FROM promotion ORDER BY intitule';
	return $db->query($request_promo);
}


/***** Suppression étudiants/promotions ****/

function supprimerPromotion($db, $id_promo)
{
	$request_supprimer_etudiant = $db->prepare('DELETE FROM etudiant WHERE promotion = :id_promo');
	$request_supprimer_etudiant->execute(array(':id_promo' => $id_promo));

	$request_supprimer_promo = $db->prepare('DELETE FROM promotion WHERE id = :id_promo');
	$request_supprimer_promo->execute(array(':id_promo' => $id_promo));
}

function suppEtudiant($db, $id_etu)
{
	$request_supprimer_etudiant = $db->prepare('DELETE FROM Etudiant WHERE id = :id_etu');
	$request_supprimer_etudiant->execute(array(':id_etu' => $id_etu));
}


?>