<?php

	require '../library/function.php';	

	$db = getDb();

	if (getInputPost('nom') !== '' && getInputPost('prenom') !== '')
	{													
			ajouterEtudiant($db, getInputPost('nom'), getInputPost('prenom'), getInputGet('pro_id'));
			header('location: promotion.php?pro_id='. getInputGet('pro_id'));
	}
		
?>