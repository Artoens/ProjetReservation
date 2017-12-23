<?php
$infos = unserialize($_SESSION['infos']);
$persons = unserialize($_SESSION['persons']);
$total = 0;


//calculs of the total price
foreach ($persons as $person) 
{
	if (intval($person->GetAge()) > 12)
	{
		$total += 15;
	}
	else
	{
		$total += 10;
	}
}

if($infos->GetAssurance())
{
	$total += 20;
}

//		insterts in the database 		//

$con = new mysqli("localhost:3308", "root", "", "reservation") or die("Could not select database");
if ($con->connect_errno) {
	echo "Echec lors de la connexion à MySQL : (" . $con->connect_errno . ")" . $con->connect_error;
}
$dest = $infos->GetDestination();
$npl = $infos->GetPlaces();
$A = $infos->GetAssurance();
if ($A)
{
	$assu = 'Oui';
}
else
{
	$assu = "Non";
}

//insterts general infos
$insert = "INSERT INTO `info` (Destination, Assurance, Prix, Places)
			VALUES ('".$dest."', '".$assu."', ".$total.", ".$npl.")";

//check the query
if ($con->query($insert) == TRUE)
{
	//echo "Record updated successfully \n";
	$idInfo = $con->insert_id;
}/*
else {
	echo "Error inserting record: " . $con->error." \n";
}*/


//inserts personal infos
foreach ($persons as $person)
{
	$Nom = $person->GetLastname();
	$Prenom = $person->GetFirstname();
	$Age = $person->GetAge();
	$insertp = "INSERT INTO `preson` (Nom, Prenom, Age, IDInfo) 
				VALUES ('".$Nom."', '".$Prenom."', ".$Age.", ".$idInfo.")";

	//check the query
	if ($con->query($insertp) == TRUE)
	{
		//echo "Record updated successfully \n";
		$idPerson = $con->insert_id;
	}/*
	else {
		echo "Error inserting record: " . $con->error." \n";
	}*/
} 

$con->close();

include 'confirmation.php';
?>