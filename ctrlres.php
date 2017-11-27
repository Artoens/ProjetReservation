<?php
$infos = unserialize($_SESSION['infos']);
if (isset($_POST["dest"])) 
{
	$infos->SetDestination($_POST["dest"]);
}

if(isset($_POST["nbrp"])) 
{
	$infos->SetPlaces($_POST["nbrp"]);
}
$infos->SetAssurance(!empty($_POST["assu"]));
$_SESSION['infos'] = serialize($infos);

if($infos->GetDestination() != "")
{
	$persons = array();
	$_SESSION['persons'] = serialize($persons);
	include 'ctrlinfo.php';
}
else
{
	include 'reservation.php';
}
?>