<!DOCTYPE html>
<html>
<head>
	<title>Gestion de l'IIA</title>
</head>
<body>
	<h1>Gestion de l'IIA</h1>
	<form method="post" action="modification_base.php">
			
		<label for="ajout"> Ajouter une promotion </label> 
		<input type="text" name="promotion" id="promotion" placeholder="Intitulé"/>
		<input type="submit" name="ok" id="ok" value="Go !"/><br/><br/>

	</form>
	<?php

		
		echo '<br/>Liste des ', $nb_promo,' promotions de l\' IIA.';

	    echo '<br/><ul>';

		while ($row = $reponse_promo->fetch()) {

			echo'<li><a href="promotion.php?pro_id='.$row['id'].'">'. $row['intitule'].'</a>', '<a href="modification_base.php?pro_id='.$row['id'].'"> <img src="../images/cancel.png" alt="Supprimmer"/></a><br/><br/>';

			
			}

		echo'</ul>';
	?>
</body>
</html>