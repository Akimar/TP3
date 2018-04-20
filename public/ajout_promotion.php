<?php

	require '../library/function.php';	
	require '../src/autoload.php';


	use repository\Promotion;


	if(getInputpost('promotion') !== '')
	{
		Promotion::ajouterPromotion(getInputPost('promotion'));
		header('Location: index.php');
	

	}

?>