<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css" />
	<title>Reservation d'un vol</title>
</head>
<body>
	<h1>
		<b>Confirmation des réservations</b>
	</h1>
	<p>Votre demande a bien été enregistrée</p>
	<p>Merci de vouloir verser la somme de <?php echo $total;?>€ sur le compte BE92 0015 5844 3123</p>
	<form action="index.php" method="POST">
		<input type="submit" value="Retour à la page d'accueil"/>
		<?php session_destroy()?>
	</form>