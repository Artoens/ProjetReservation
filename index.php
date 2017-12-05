<?php
require_once("mInfo.php");
require_once("mPerson.php");

session_start();
if (!empty($_POST["cancel"]) && $_POST["cancel"] == "true") 
{
	session_destroy();
	include "cancel.php";
}
else{
	if (!empty($_POST["page"]) && is_file($_POST["page"].".php"))
	{
	   	include $_POST["page"].".php";
	}	
	else
	{
		$infos = new info();
		$_SESSION['infos'] = serialize($infos);
	   	include "ctrlres.php";
}
}
?>