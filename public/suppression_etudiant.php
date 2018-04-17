<?php

	require '../library/function.php';	

	$db = getDb();
	
	if (getInputGet('etu_id') !== '')
	{
		if (getInputGet('code') == 'etu')
		{
			
			supprimerEtudiant($db, getInputGet('etu_id'));
			header('location: promotion.php?pro_id='. getInputGet('pro_id'));
			
		}
?>