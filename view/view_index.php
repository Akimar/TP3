<!DOCTYPE html>
<html>
<head>
	<title>Gestion de l'IIA</title>
</head>
<body>
	<h1>Gestion de l'IIA</h1>
	<form method="post" action="scripts/modif_base.php">
			
		<label for="ajout"> Ajouter une promotion </label> 
		<input type="text" name="ajout" id="ajout" placeholder="intitulé"/>
		<input type="submit" name="ok" id="ok" value="Go !"/><br/><br/>

	</form>
	<?php

		
		echo '<br/>Liste des ', $nb_promo,' promotions de l\' IIA.';
		
	    $promo = $db->query('SELECT * FROM promotion ORDER BY intitule');

	    echo '<br/><ul>';

		while ($row = $promo->fetch()) {

			echo'<li><a href="">'. $row['intitule'].'</a></li><br/>';

			
			}

		echo'</ul>';
	?>
</body>
</html>