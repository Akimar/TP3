<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo '<form method="post" action="modification_base.php?pro_id=', $_GET['pro_id'], '">';?>
	
	Ajouter un étudiant<br/>

	<label for="nom"> Nom </label> 
	<input type="text" name="nom" id="nom"/><br/>
	
	<label for="prenom"> Prénom </label> 
	<input type="text" name="prenom" id="prenom"/></body><br>


	<input type="submit" name="ok" id="ok" value="Go !"/><br/><br/>
</form>

<?php
	echo 'Liste des ', $nb_etu, ' étudiants de la promotion ', $nom_promo['intitule'],'.'; 
	echo '<ul>';
	while($ligne = $reponse_etu->fetch())
	{
		echo  '<li>', $ligne['prenom'] ,' ', $ligne['nom'], '  <a href="../scripts/modif_base.php?etu_id=', $ligne['id'], '&pro_id=', $_GET['pro_id'], ' &code=2"> <img src="../images/cancel.png" alt="Supprimmer"></a></li>';
	
	}

	echo '</ul>';
		?>

</body>
</html>