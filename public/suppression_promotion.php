<?php

	require '../library/function.php';	

	$db = getDb();

			
	if (getInputGet('pro_id') !== '')
	{
		if (getInputGet('code') == 'pro')
		{
			supprimerPromotion($db, getInputGet('pro_id'));
			header('Location: index.php');
		}
			
	}
?>