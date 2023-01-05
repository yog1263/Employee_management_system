<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "admin@1234";
$dBName = "ems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>

