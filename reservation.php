<!DOCTYPE html>
<html>
<head>
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
	<table>
		<tr>
			<td>Destination</td>
			<td><form action="index.php" method="POST">
				<select name="Destination" size="1">
					<OPTION>Bruxelles
					<OPTION>Berlin
					<OPTION>Paris
					<OPTION>Dublin
					<OPTION>Madrid
				</select>
			</form></td>
		</tr>
		<tr>
			<td>Nombre de places</td>
			<td>
				<form action="index.php" method="POST">
  					<input type="text" name="nombre de places">
				</form>
			</td>
		</tr>
		<tr>
			<td>Assurance anulation</td>
			<td>
				<form action="index.php" method="POST">
					<input type="checkbox" name="assurance">
				</form>
			</td>
		</tr>
	</table>
	<p>
		<input type="button" value="Etape suivante">  <input type="button" value="Annuler la reservation">
		<input type="hidden" name="page" value="ctrlinfo">
	</p>
</body>
</html>