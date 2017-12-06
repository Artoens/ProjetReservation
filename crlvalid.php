<?php

$majeur = false;
$error = "";
foreach ($persons as $person)
{
	if ($person->GetAge() >= 18)
	{
		$majeur = true;
	}
}

if (!$majeur)
{
	$error = '<div id="error"> Pour passer commande au moins un passager doit être majeur	 </div>';
}

include 'validation.php';
?>