<?php

	require '../library/function.php';	

	require '../src/autoload.php';


	use repository\Etudiant;
	
	if (getInputGet('etu_id') !== '')
	{
			
		Etudiant::supprimerEtudiant(getInputGet('etu_id'));
		header('location: promotion.php?pro_id='. getInputGet('pro_id'));
			
	}
?>