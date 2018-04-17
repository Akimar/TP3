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

	if (getInputGet('etu_id') !== '')
	{
		if (getInputGet('code') == 'etu')
		{
			
			supprimerEtudiant($db, getInputGet('etu_id'));
			header('Location: promotion.php?pro_id='. getInputGet('pro_id'));
			
		}
			
	}
	
	if(getInputpost('promotion') !== '')
	{
		ajouterPromotion($db, getInputpost('promotion'));
		header('Location: index.php');

	}

	if (getInputPost('nom') !== '' && getInputPost('prenom') !== '')
		{													
			ajouterEtudiant($db, getInputPost('nom'), getInputPost('prenom'), getInputGet('pro_id'));
		}
		
		header('Location: promotion.php?pro_id='. getInputGet('pro_id'));

?>