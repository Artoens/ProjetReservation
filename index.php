<?php
session_start();
require_once("mInfo.php");
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
?>