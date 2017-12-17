<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css">
	<title>Reservation d'un vol</title>
<body>
	<h1>
	<b>Passager <?php echo $n + 1; ?></b>
	</h1>
	<?php echo $error;?>
	<p></p>
	<form  action='index.php' method='POST'>
		<table>
			<tr>
				<td> Nom </td>
				<td> <input type='text' name='name' value="<?php echo $person->GetLastname(); ?>"> </td>
			</tr>
			<tr>
				<td> Prénom </td>
				<td> <input type='text' name='first' value="<?php echo $person->GetFirstname(); ?>"> </td>
			</tr>
			<tr>
				<td> Age </td>
				<td> <input type='text' name='age' value="<?php echo $person->GetAge(); ?>"> </td>
			<tr><td> </td><td> </td></tr>
		</table>

		<input type="submit" value="Etape suivante"/>
		<input type="hidden" name="page" value="ctrlinfo">
		<input type="hidden" name="n" value= <?php echo $n; ?> >
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
	