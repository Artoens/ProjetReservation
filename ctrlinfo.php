<?php
$persons = unserialize($_SESSION['persons']);
var_dump($_POST);
var_dump($persons);
$error = '';

if (isset($_POST["retour"]))
{
	$retour = intval($_POST["retour"]);
	$n = $retour - 1;
	if ($retour == 0)
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
		$n = 0;
	}
	if (isset($_POST["name"]) && isset($_POST["first"]) && isset($_POST["age"]))
	{
		if ($_POST["name"] != "" && $_POST["first"] != "" && $_POST["age"] != "" && ctype_digit($_POST["age"]))
		{
			$persons[$_POST["n"]] = new person($_POST["first"], $_POST["name"], intval($_POST["age"]));
			var_dump($persons);
			$_SESSION['persons'] = serialize($persons);
		}
		else
		{
			if ($_POST["name"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un nom </div>';
			}
			if ($_POST["first"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un prénom </div>';
			}
			if ($_POST["age"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un age </div>';
			}
			else
			{
				if (!ctype_digit($_POST["age"]))
				{
					$error = $error.'<div id="error"> Veuillez enter un age correct </div>';
				}

			}
			$n = $_POST["n"];
		}
	}

	$infos = unserialize($_SESSION['infos']);
	if ($n < intval($infos->GetPlaces()))
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