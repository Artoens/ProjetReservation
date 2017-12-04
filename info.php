<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css" />
	<title>Reservation d'un vol</title>
<body>
	<h1>
	<b>Passager <?php echo $n; ?></b>
	</h1>
	<form  action='index.php' method='POST'>
		Nom <input type='text' name='name' value="<?php echo $person->GetLastname(); ?>"> </br>
		Prénom <input type='text' name='first' value="<?php echo $person->GetFirstname(); ?>" > </br>
		Age <input type='text' name='age' value="<?php echo $person->GetAge(); ?>"></br>		
	<p>
		<input type="submit" value="Etape suivante"/>
		<input type="hidden" name="page" value="ctrlinfo">
		<input type="hidden" name="n" value= <?php echo $n; ?> >

	</p>
	</form>
	<form action="index.php" method="POST">
		<input type="submit" value="Retour à la page précédente"/>
		<input type="hidden" name="page" value="ctrlinfo">
		<input type="hidden" name="retour" value= <?php echo $n; ?> >
	</form>
	<form action="index.php" method="POST">
		<input type="submit" value="Annuler la réservation"/>
		<input type="hidden" name="cancel" value= "true">
	</form>
</body>
</html>
	