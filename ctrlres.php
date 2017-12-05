<?php
$infos = unserialize($_SESSION['infos']);
if (isset($_POST["dest"]) && isset($_POST["nbrp"])) 
{
	$infos->SetDestination($_POST["dest"]);
	$infos->SetPlaces($_POST["nbrp"]);
	$infos->SetAssurance(isset($_POST["assu"]));
	$_SESSION['infos'] = serialize($infos);

	if (!isset($_SESSION['persons']))
	{
		$persons = array();
		$_SESSION['persons'] = serialize($persons);
	}
	include 'ctrlinfo.php';
}

else
{
	include 'reservation.php';
}
?>