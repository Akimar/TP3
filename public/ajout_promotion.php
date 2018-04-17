<?php

	require '../library/function.php';	

	$db = getDb();


	if(getInputpost('promotion') !== '')
	{
		ajouterPromotion($db, getInputpost('promotion'));
		header('Location: index.php');
	

	}

?>