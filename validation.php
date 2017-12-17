<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css" />
	<title>Reservation d'un vol</title>
</head>
<body>
	<h1>
		<b>Validation des réservations</b>
	</h1>
	<?php echo $error;?>
	<p></p>
	<table>
		<tr>
			<td>Destination</td>
			<td><?php echo $infos->GetDestination();?></td>
		</tr>
		<tr>
			<td>Nombre de places</td>
			<td><?php echo $infos->GetPlaces();?></td>
		</tr>
		<tr><td> </td><td> </td></tr>
		<?php
		foreach ($persons as $person) 
		{
			echo "<tr><td>Nom</td><td>".$person->GetFirstname()." ".$person->GetLastname()."</td></tr><tr><td>Age</td><td>".$person->GetAge()."</td></tr>";
			echo "<tr><td> </td><td> </td></tr>";
		}
		?>
		<tr>
			<td>Assurrance annulation</td>
			<td>
				<?php
				if ($infos->GetAssurance())
				{
					echo "Oui";
				}
				else
				{
					echo "Non";
				}
				?>
			</td>
		</tr>
	</table>
	<?php
	if ($error == "")
	{
		echo '<form action="index.php" method="POST"><input type="submit" value="Confirmer"/><input type="hidden" name="page" value="crtlconf"></form>';
	}
	?>
	<form action="index.php" method="POST">
		<input type="submit" value="Retour à la page précédente"/>
		<input type="hidden" name="page" value="ctrlinfo">
		<input type="hidden" name="retour" value= <?php echo ($infos->GetPlaces()); ?> >
	</form>
	<form action="index.php" method="POST">
		<input type="submit" value="Annuler la réservation"/>
		<input type="hidden" name="cancel" value="true">
	</form>
</body>
</html>