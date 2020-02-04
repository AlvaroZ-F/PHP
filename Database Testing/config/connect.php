<?php

	// Connect to database:
	$conn = mysqli_connect('localhost', 'azambrana', 'fernandez79', 'it shop');

	// Check the connection:
	if (!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
	}

?>