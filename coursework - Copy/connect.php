<?php
$servername = "lochnagar.abertay.ac.uk";
$username = "sql1902545";
$password = "G6b3Ae47qdXw";
$dBname = "sql1902545";


$conn = mysqli_connect ($servername, $username, $password, $dBname);
if (!conn) {
	die ("Connection Failed: " . mysqli_connect_error);

}

?>
