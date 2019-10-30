<?php
	$conexion = new mysqli('localhost', 'alvaroz', 'ragnarok7', 'matricula');

	if ($conexion->connect_errno) {
		die('Connect Error: ' . $conexion->connect_errno);
	} else {
		echo ('Connected');
	}
?>