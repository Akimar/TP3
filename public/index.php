<?php

require '../library/function.php';	
require '../src/service/BDD.php';
require '../src/repository/promotion.php';

//use service\BDD;
use repository\Promotion;
	

	//$db = new BDD();

	$reponse_promo = Promotion::getAllPromotions();
	$nb_promo = $reponse_promo->rowCount();

	require '../view/view_index.php';
?>
