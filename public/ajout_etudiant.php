<?php

	require '../library/function.php';	
	require '../src/autoload.php';


	use repository\Etudiant;

	if (getInputPost('nom') !== '' && getInputPost('prenom') !== '')
	{													
			Etudiant::ajouterEtudiant(getInputPost('nom'), getInputPost('prenom'), getInputGet('pro_id'));
			header('location: promotion.php?pro_id='. getInputGet('pro_id'));
	}
		
?>