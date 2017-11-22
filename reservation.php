
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/main.css" type="text/css" />
	<title>Reservation d'un vol</title>
</head>
<body>
	<h1>
		<b>Reservation</b>
	</h1>
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
					<select name="dest" size="1" value = <?php echo $dest;?>>
						<OPTION>Bruxelles
						<OPTION>Berlin
						<OPTION>Paris
						<OPTION>Dublin
						<OPTION>Madrid
					</select>
				</td>
			</tr>
			<tr>
				<td>Nombre de places</td>
				<td>
	  				<input type="text" name="nbrp" value=<?php echo $places ?>>
				</td>
			</tr>
			<tr>
				<td>Assurance anulation</td>
				<td>
					<input type="checkbox" name="assu" value= <?php echo $ass ?>>
				</td>
			</tr>
		</table>
	</frorm>
	<p>
		<input type="submit" value="Etape suivante"/>
		<!--<input type="button" value="Annuler la reservation">-->
		<input type="hidden" name="page" value="ctrlres">
	</p>
</body>
</html>