<?php

require '../library/function.php';	

	$db = getDb();

	$reponse_promo = getAllPromotions($db);
	$nb_promo = $reponse_promo->rowCount();

	require '../view/view_index.php';
?>
