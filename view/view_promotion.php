<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo '<form method="post" action="modification_base.php?pro_id=', $_GET['pro_id'], '">';?>
	
	Ajouter un étudiant

	<label for="nom"> Nom </label> 
	<input type="text" name="nom" id="nom"/><br/>
	
	<label for="prenom"> Prénom </label> 
	<input type="text" name="prenom" id="prenom"/></body><br>


	<input type="submit" name="ok" id="ok" value="Go !"/><br/><br/>
</form>

</body>
</html>