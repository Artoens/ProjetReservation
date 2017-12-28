<?php
require_once("mInfo.php");
require_once("mPerson.php");

session_start();

$conn = new mysqli("localhost:3308", "root", "", "reservation") or die ("Could not select database");

$Qinfos = "SELECT * FROM `info` WHERE `info`.`IDInfo`  = ".$_POST["edit"];
$Qpersons = "SELECT * FROM `preson`WHERE `preson`.`IDInfo`  = ".$_POST["edit"];

$datainfo = $conn->query($Qinfos) or die ("Query failed");
$datapersons = $conn->query($Qpersons) or die ("Query failed");
$lineInfo = $datainfo->fetch_assoc();

//creates a new info object to be edit
$infos = new info();
$infos->SetDestination($lineInfo['Destination']);
$infos->SetPlaces($lineInfo['Places']);
$infos->SetAssurance($lineInfo['Assurance']);
$infos->SetEdit(TRUE);
$infos->SetID(intval($lineInfo['IDInfo']));
//creates a new array of person object to be edit
$persons = array();
while ($line = $datapersons->fetch_assoc()) 
	{
		$p =  new person($line['Prenom'], $line['Nom'], $line['Age']);
		$p->SetID(intval($line['IDPerso']));
		$persons[] = $p;
	}

$_SESSION['persons'] = serialize($persons);
$_SESSION['infos'] = serialize($infos);
include 'ctrlres.php';

?>