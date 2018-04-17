<?php

	if (!isset($_GET['pro_id']))
	{
		header('Location: index.php');
	}
	
	require '../library/function.php';		
	
	$db = getDb();
	$pro_id = $_GET['pro_id'];

	$reponse_promo = getNomPromotion($db, $pro_id);
	$nom_promo = $reponse_promo->fetch();
	

	$reponse_etu = getEtudiantPromo($db, $_GET['pro_id']);
	$nb_etu = $reponse_etu->rowCount();

	require '../view/view_promotion.php';				

?>