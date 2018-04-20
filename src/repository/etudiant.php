<?php

namespace repository;

use service\BDD;

class Etudiant
{
	public static function ajouterEtudiant($nom, $prenom, $promotion)
	{
		$db = new BDD();
		$request_ajout_etudiant = $db->prepare('INSERT INTO etudiant VALUES(NULL, :prenom, :nom, :promotion)');
		$request_ajout_etudiant->execute(array(':prenom' => $prenom,
											':nom' => $nom,
										   ':promotion' =>$promotion));
	}

	public static function getEtudiantPromo($promo)
	{
		$db = new BDD();
		$request_etu = $db->prepare('SELECT * FROM etudiant WHERE promotion =:id_promo ORDER BY nom, prenom');
		$request_etu->execute(array(':id_promo' => $promo));
		return $request_etu;
	}

	public static function supprimerEtudiant($id_etu)
	{	
		$db = new BDD();
		$request_supprimer_etudiant = $db->prepare('DELETE FROM etudiant WHERE id = :id_etu');
		$request_supprimer_etudiant->execute(array(':id_etu' => $id_etu));
	}
}

?>