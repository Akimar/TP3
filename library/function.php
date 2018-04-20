<?php

function getInputPost($name)
{
	return filter_input(INPUT_POST, $name);
}

function getInputGet($name)
{
	return filter_input(INPUT_GET, $name);
}

/**** Connexion à la base ******/

/*/function getDb()
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
}*/

/****** Get de toutes les promotions *****/
/*{
	$request_promo = 'SELECT * FROM promotion ORDER BY intitule';
	return $db->query($request_promo);
}*/


/***** Suppression étudiants/promotions ****/

/*function supprimerPromotion($db, $id_promo)
{
	$request_supprimer_etudiant = $db->prepare('DELETE FROM etudiant WHERE promotion = :id_promo');
	$request_supprimer_etudiant->execute(array(':id_promo' => $id_promo));

	$request_supprimer_promo = $db->prepare('DELETE FROM promotion WHERE id = :id_promo');
	$request_supprimer_promo->execute(array(':id_promo' => $id_promo));
}

function supprimerEtudiant($db, $id_etu)
{
	$request_supprimer_etudiant = $db->prepare('DELETE FROM etudiant WHERE id = :id_etu');
	$request_supprimer_etudiant->execute(array(':id_etu' => $id_etu));
}*/


/**** Ajout étudiants/promotions *****/					

/*function ajouterEtudiant($db, $nom, $prenom, $promotion)
{
	$request_ajout_etudiant = $db->prepare('INSERT INTO etudiant VALUES(NULL, :prenom, :nom, :promotion)');
	$request_ajout_etudiant->execute(array(':prenom' => $prenom,
											':nom' => $nom,
										   ':promotion' =>$promotion));
}


function ajouterPromotion($db, $intitule)
{
	$request_ajout_promotion = $db->prepare('INSERT INTO promotion VALUES(NULL, :intitule)');
	$request_ajout_promotion->execute(array(':intitule' => $intitule));
}*/

/****** Requêtes d'interrogation de la base ******/

/*function getNomPromotion($db, $id_promo)
{
	$request_promo = $db->prepare('SELECT intitule FROM promotion WHERE id = :id_promo');
	$request_promo->execute(array(':id_promo' => $id_promo));
	return $request_promo;
	
}




function getEtudiantPromo($db, $promo)
{
	$request_etu = $db->prepare('SELECT * FROM etudiant WHERE promotion =:id_promo ORDER BY nom, prenom');
	$request_etu->execute(array(':id_promo' => $promo));
	return $request_etu;
}
*/
?>