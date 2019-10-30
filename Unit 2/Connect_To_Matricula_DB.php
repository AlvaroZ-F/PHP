<?php

try {
	
	$connect = new PDO('mysql:host=localhost;dbname=matricula', 'alvaroz', 'zambrana97');

	foreach ($connect -> query('SELECT * from alumno') as $fila) {
		print_r ($fila);
	}
	$connect = null;
} catch (PDOException $e) {
	print "Error: " . $e->getMessage() . "<br/>";
	die();
}

?>