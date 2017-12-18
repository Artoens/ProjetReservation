
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css">
	<title>Reservation d'un vol</title>
</head>
<body>
	<h1>
		<b>Reservation</b>
	</h1>
	<?php echo $error;?>
	<p>
		Le prix de la place est de 10€ jusqu'à 12 ans. Ensuite de 15€
		<br>
		Le prix de l'assurance annulation est de 20€, quel que soit le nombre de voyageurs
	</p>
	<form action="index.php" method="POST">
		<table>
			<tr>
				<td>Destination</td>
				<td>
					<select name="dest" size="1">
						<option selected="selected"><?php echo $infos->GetDestination();?></option>
						<OPTION>Bruxelles</OPTION>
						<OPTION>Berlin</OPTION>
						<OPTION>Paris</OPTION>
						<OPTION>Dublin</OPTION>
						<OPTION>Madrid</OPTION>
						<OPTION>Lisbonne</OPTION>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nombre de places</td>
				<td>
	  				<input type="text" name="nbrp" value= "<?php echo $infos->GetPlaces();?>">
				</td>
			</tr>
			<tr>
				<td>Assurance anulation</td>
				<td>
					<input type="checkbox" name="assu" <?php if($infos->GetAssurance()){echo "checked";}?>>
				</td>
			</tr>
			<tr><td> </td><td> </td></tr>
		</table>
		<input type="submit" value="Etape suivante"/>
		<input type="hidden" name="page" value="ctrlres">
	</form>
	<form action="index.php" method="POST">
		<input type="submit" value="Annuler la réservation"/>
		<input type="hidden" name="cancel" value= "true">
	</form>
</body>
</html>