<?php

	$infos = unserialize($_SESSION['infos']);
	$places= $infos->GetPlaces();
	$ass = $infos->GetAssurance();
	$dest = $infos->GetDestination();

include "reservation.php"
?>