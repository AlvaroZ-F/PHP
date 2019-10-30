<?php

$dbServername = "localhost";
$dbUsername = "alvaroz";
$dbPassword = "ragnarok7";
$dbName = "Matricula";


// Creates a new connection under the variable called "Conn"
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

// Checks if the connection has been established and returns an error if not. Also informs if you're connected.
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	printf("Connection has been established correctly");
}

?>