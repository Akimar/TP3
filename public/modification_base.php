<?php

	require '../library/function.php';	

	$db = getDb();


	if (isset($_GET['pro_id']))
	{						
		if (!empty($_GET['pro_id']))
		{
			if ($_GET['code'] == 'pro')
			{
				supprimerPromotion($db, $_GET['pro_id']);
				header('Location: index.php');
			}
			
		}
	}

	if(getInputpost('promotion') !== '')
	{
		ajouterPromotion($db, getInputpost('promotion'));
		header('Location: index.php');

	}

?>