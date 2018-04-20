<?php

	require '../library/function.php';	

	require '../src/autoload.php';


	use repository\Promotion;

			
	if (getInputGet('pro_id') !== '')
	{
		
		Promotion::supprimerPromotion(getInputGet('pro_id'));
		header('Location: index.php');
	
			
	}
?>