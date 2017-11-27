<?php
require_once("mPerson.php");
$persons = unserialize($_SESSION['persons']);

if (isset($_POST["name"]) && isset($_POST["first"]) && isset($_POST["age"]))
{
	$persons[] = new person($_POST["name"], $_POST["first"], intval($_POST["age"]));
	var_dump($persons);
	$_SESSION['persons'] = serialize($persons);
}
$infos = unserialize($_SESSION['infos']);
var_dump($infos);

$n = count($persons) + 1;
echo $n;

if ($n <= $infos->GetPlaces())
{
	echo "coucou";
	include 'info.php';
}
else
{
	include 'crlvalid.php';
}

?>