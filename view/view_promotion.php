<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php"> Retour à la liste des promotions.</a><br/><br/>
	<?php echo '<form method="post" action="ajout_etudiant.php?pro_id=', getInputGet('pro_id'), '">';?>
	
	Ajouter un étudiant<br/>

	<label for="nom"> Nom </label> 
	<input type="text" name="nom" id="nom"/><br/>
	
	<label for="prenom"> Prénom </label> 
	<input type="text" name="prenom" id="prenom"/></body><br>


	<input type="submit" name="ok" id="ok" value="Go !"/><br/><br/>
</form>

<?php
	echo 'Liste des ', $nb_etu, ' étudiant(s) de la promotion ', $nom_promo['intitule'],'.'; 
	echo '<ul>';
	while($ligne = $reponse_etu->fetch())
	{
		echo  '<li>'. $ligne['prenom'] .' '. $ligne['nom']. '  <a href="suppression_etudiant.php?etu_id='. $ligne['id'], '&pro_id='. getInputGET('pro_id'). ' &code=etu"> <img src="../images/cancel.png" alt="Supprimmer"></a></li>';
	
	}

	echo '</ul>';
		?>

</body>
</html>