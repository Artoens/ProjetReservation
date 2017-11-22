<?php
	var_dump($_POST);
	session_start();
	require_once("mInfo.php");
		if (!empty($_GET["page"]) && is_file($_GET["page"].".php"))
		{
        	include $_GET["page"].".php";
    	}	
		else
		{
			$infos = new info();
			$_SESSION['infos'] = serialize($infos);
        	include "ctrlres.php";
        }
?>