<?php
	session_start();
		if (!empty($_GET["page"]) && is_file($_GET["page"].".php"))
		{
        	include $_GET["page"].".php";
    	}	
		else
		{
        	include "reservation.php";
        }
?>