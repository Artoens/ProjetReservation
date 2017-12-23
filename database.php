<?php

$conn = new mysqli("localhost:3308", "root", "", "reservation") or die ("Could not select database");

// Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 


$infos = "SELECT * FROM `info`";
$persons = "SELECT * FROM `preson`";

$info = $conn->query($infos) or die ("Query failed");


//css set up
echo '<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/main.css" type="text/css">
	<title>Reservation d\'un vol</title>
</head>';

//title
echo '<body>
	<h1>
		<b>Liste des réservations</b>
	</h1>';

//button to add a resrvation
echo '<form action="index.php" method="POST">
		<input type="submit"  class="button" value="Ajouter une réservation"/>
		<input type="hidden">
		</form>';

// Displays columns header
echo '<table id="data"><tr>';

while ($finfo = $info->fetch_field())
{
	echo '<th>'. $finfo->name .'</th>'; 
}

echo '<th>Nom - Age </th>
		<th>Editer </th>
		<th>Supprimer </th>';
	

echo "</tr>\n";

// Displays the infos in HTML
while ($line = $info->fetch_assoc()) 
{
	$id = $line["IDInfo"];  
	$i = 0;
	echo "\t<tr>\n";
	foreach ($line as $col_value) 
	{
		echo "\t\t<td>$col_value</td>\n";
	}
	echo "<td>";
	$person = $conn->query($persons) or die ("Query failed");
	while ($lin = $person->fetch_assoc()) 
	{
		if ($lin["IDInfo"] == $id) 
		{
			echo $lin["Nom"]." - ".$lin["Age"]."<br>";
		}
	}
	echo "</td>";
	echo"
		<td>
			<form action='edit.php' method='POST'>
			<input type='submit' class='button' value='Editer'/>
			<input type='hidden' name='edit' value='$id'>
			</form>
		</td>";
	echo"
		<td>
			<form action='delete.php' method='POST'>
			<input type='submit' class='button' value='Supprimer'/>
			<input type='hidden' name='delete' value='$id'>
			</form>
		</td>";
	echo "\t</tr>\n";
}
echo "</table>\n";


// DELETE FROM `info` WHERE `info`.`IDInfo` = xx;
// DELETE FROM `preson` WHERE `info`.`IDInfo` = xx;
// UPDATE `info` SET `Destination` = 'Bruxelles' WHERE `info`.`IDInfo` = 15;

?>