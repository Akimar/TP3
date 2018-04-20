<?php

require '../library/function.php';	
require '../src/service/BDD.php';

use service\BDD;
	

	$db = new BDD();

	$reponse_promo = getAllPromotions($db);
	$nb_promo = $reponse_promo->rowCount();

	require '../view/view_index.php';
?>
