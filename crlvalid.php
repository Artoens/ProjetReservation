<?php

$persons = unserialize($_SESSION['persons']);
$infos = unserialize($_SESSION['infos']);
$i = 0;
$majeur = false;
$error = "";
while (!$majeur && $i  < count($persons))
{
	echo 'yo';
	$person = $persons[$i];
	if ($person->GetAge() >= 18)
	{
		$majeur = true;
	}
	$i = $i+1;
}

if (!$majeur)
{
	$error = '<div id="error"> Pour passer commande au moins un passager doit être majeur	 </div>';
}
else
{
	$error = "";
}
include 'validation.php';

?>