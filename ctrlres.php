<?php
$infos = unserialize($_SESSION['infos']);
if (isset($_POST["dest"]) && isset($_POST["nbrp"])) 
{
	$error = "";
	if (($_POST["dest"] != "") && ($_POST["nbrp"] != ""))
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
	{/*
		if ($_POST["dest"] == "")
		{
			$error = $error."<div id="error"> Veuillez renter une destination </div>";
		}
		if ($_POST["nbrp"] == "")
		{
			$error = $error."<div id="error"> Veuillez renter une destination </div>";
		}*/
		include 'reservation.php';
	}
}

else
{
	include 'reservation.php';
}
?>