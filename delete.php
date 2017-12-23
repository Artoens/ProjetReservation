<?php

$conn = new mysqli("localhost:3308", "root", "", "reservation") or die ("Could not select database");

$delinfo = "DELETE FROM `info` WHERE `info`.`IDInfo` = ".$_POST["delete"];
$delpers = "DELETE FROM `preson` WHERE `preson`.`IDInfo` = ".$_POST["delete"];

$conn->query($delinfo) or die ("Query failed");
$conn->query($delpers) or die ("Query failed");

include 'database.php';
?>