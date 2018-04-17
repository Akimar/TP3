<!DOCTYPE html>
<html>
<head>
	<title>Gestion de l'IIA</title>
</head>
<body>
	<h1>Gestion de l'IIA</h1>
	<?php

		$dsn = 'mysql:host=localhost;dbname=iia';
		$username = 'root';
		$password = '';
		$options = array(
						PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
						);
		try
		{
			$db = new PDO($dsn, $username, $password, $options);
		}

		catch(PDOException $ex) 
		{
			
	  		echo 'Erreur : '.$ex->getMessage();
		}

	    $promo = $db->query('SELECT * FROM promotion ORDER BY intitule');

	    echo '<br/><ul>';

		while ($row = $promo->fetch()) {

			echo'<li><a href="">'. $row['intitule'].'</a></li><br/>';

			
			}

		echo'</ul>';
	?>
</body>
</html>