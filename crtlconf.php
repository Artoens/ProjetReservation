<?php
$infos = unserialize($_SESSION['infos']);
$persons = unserialize($_SESSION['persons']);
var_dump($persons);

$total = 0;

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
include 'confirmation.php';
?>