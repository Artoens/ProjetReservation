<?php
$persons = unserialize($_SESSION['persons']);
$error = '';
$infos = unserialize($_SESSION['infos']);

//tests if the user clicked on the return button
//goes to the page depending on where he was
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
	//if all the fields are filled, create a new person
	if (isset($_POST["name"]) && isset($_POST["first"]) && isset($_POST["age"]))
	{
		if ($_POST["name"] != "" && $_POST["first"] != "" && $_POST["age"] != "" && ctype_digit($_POST["age"]))
		{
			//create a new person
			$p = new person($_POST["first"], $_POST["name"], intval($_POST["age"]));
			//sets the new person the ID of the old-one
			if (isset($persons[$_POST["n"]]))
			{
				$p->SetID($persons[$_POST["n"]]->GetID());
			}
			//overwrites the person if isset. If not, sets it
			$persons[$_POST["n"]] = $p;
			$_SESSION['persons'] = serialize($persons);
		}
		//fill the error message
		else
		{
			if ($_POST["name"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un nom </div> <br>';
			}
			if ($_POST["first"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un prénom </div><br>';
			}
			if ($_POST["age"] == "")
			{
				$error = $error.'<div id="error"> Veuillez enter un age </div><br>';
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

	//displays the next page, if it's personal information again
	//initializes a new person or displays an registred one (if it is being changed)
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