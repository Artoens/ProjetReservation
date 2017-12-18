<?php

$conn = new mysqli("localhost	", "root", "", "reservation") or new mysqli("localhost:3308", "root", "", "reservation") or die ("Could not select database");

// Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
echo "coucou";

?>