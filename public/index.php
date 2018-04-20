<?php

require '../library/function.php';	
require '../src/autoload.php';


use repository\Promotion;
	


	$reponse_promo = Promotion::getAllPromotions();
	$nb_promo = $reponse_promo->rowCount();

	require '../view/view_index.php';
?>
