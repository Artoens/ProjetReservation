<?php
require_once("mPerson.php");
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
	if (isset($_POST["name"]) && isset($_POST["first"]) && isset($_POST["age"]))
	{
		$persons[$_POST["n"]] = new person($_POST["name"], $_POST["first"], intval($_POST["age"]));
		$_SESSION['persons'] = serialize($persons);
	}
	$infos = unserialize($_SESSION['infos']);
	$n = count($persons) + 1;
	if ($n <= $infos->GetPlaces())
	{
		$person = new person("", "", "");
		include 'info.php';
	}
	else
	{
		include 'crlvalid.php';
	}
}
?>