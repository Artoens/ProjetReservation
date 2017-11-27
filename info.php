<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css" />
	<title>Reservation d'un vol</title>
<body>
	<h1>
	<b>Passager <?php echo $n ?></b>
	</h1>
	<form  action='index.php' method='POST'>
		Nom <input type='text' name='name'> </br>
		Prénom <input type='text' name='first'> </br>
		Age <input type='text' name='age'> </br>		
	<p>
		<input type="submit" value="Etape suivante"/>
		<input type="hidden" name="page" value="ctrlinfo">
	</p>
	</form>
</body>
</html>
	