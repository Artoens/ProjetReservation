<?php
$infos = unserialize($_SESSION['infos']);
$error = '';
if (isset($_POST["dest"]) && isset($_POST["nbrp"])) 
{
	if (($_POST["dest"] != "") && ($_POST["nbrp"] != "") && (intval($_POST["nbrp"]) >=1) )
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
		if ($_POST["dest"] == "")
		{
			$error = $error.'<div id="error"> Veuillez renter une destination </div>';
		}
		if ($_POST["nbrp"] == "")
		{
			$error = $error.'<div id="error"> Veuillez renter un nombre de places </div>';
		}
		else
		{
			if (intval($_POST["nbrp"]) <= 1)
			{
				$error = $error.'<div id="error"> Veuillez renter un nombre prositif non nul pour votre nombre de places </div>';
			}
		}
		include 'reservation.php';
	}
}

else
{
	include 'reservation.php';
}
?>