<?php
$infos = unserialize($_SESSION['infos']);
var_dump($infos);
if (isset($_POST["dest"])) 
	{
		$infos->SetDestination($_POST["dest"]);
	}

if(isset($_POST["nbrp"])) 
	{
		$infos->SetPlaces($_POST["nbrp"]);
	}
$infos->SetAssurance(!empty($_POST["assu"]));

if($infos->GetDestination() != "")
{
	include 'ctrlinfo.php';
}
else
{
include 'reservation.php';
}
var_dump($infos);

$_SESSION['infos'] = serialize($infos);
?>