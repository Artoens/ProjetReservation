<?php
$persons = unserialize($_SESSION['persons']);
if (isset($_POST["retour"]))
{
	$retour = intval($_POST["retour"]);
	$n = $retour - 1;
	if ($retour == 1)
	{
		include "ctrlres.php";
	}
	else
	{
		$person = $persons[$n];
		include 'info.php';
	}
}
else
{
	if (isset($_POST["n"]))
	{
		$n = $_POST["n"] + 1;
	}
	else
	{
		$n = 1;
	}

	if (isset($_POST["name"]) && isset($_POST["first"]) && isset($_POST["age"]))
	{
		$persons[$_POST["n"]] = new person($_POST["first"], $_POST["name"], intval($_POST["age"]));
		$_SESSION['persons'] = serialize($persons);
	}
	$infos = unserialize($_SESSION['infos']);
	if ($n <= intval($infos->GetPlaces()))
	{
		if (isset($persons[$n]))
		{
			$person = $persons[$n];
		}
		else
		{
			$person = new person("", "", "");
		}

		include 'info.php';
	}
	else
	{
		include 'crlvalid.php';
	}
}
?>