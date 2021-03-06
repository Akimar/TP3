<?php

namespace repository;

use service\BDD;

class Promotion
{
	public static function getAllPromotions()
	{
		$db = new BDD();
		return $db->query('SELECT * FROM promotion ORDER BY intitule');
	}


	public static function supprimerPromotion($id_promo)
	{
		$db = new BDD();
		$request_supprimer_etudiant = $db->prepare('DELETE FROM etudiant WHERE promotion = :id_promo');
		$request_supprimer_etudiant->execute(array(':id_promo' => $id_promo));

		$request_supprimer_promo = $db->prepare('DELETE FROM promotion WHERE id = :id_promo');
		$request_supprimer_promo->execute(array(':id_promo' => $id_promo));
	}

	public static function ajouterPromotion($intitule)
	{
		$db = new BDD();
		$request_ajout_promotion = $db->prepare('INSERT INTO promotion VALUES(NULL, :intitule)');
		$request_ajout_promotion->execute(array(':intitule' => $intitule));
	}

	public static function getNomPromotion($id_promo)
	{
		$db = new BDD();
		$request_promo = $db->prepare('SELECT intitule FROM promotion WHERE id = :id_promo');
		$request_promo->execute(array(':id_promo' => $id_promo));
		return $request_promo;
	}

}


?>