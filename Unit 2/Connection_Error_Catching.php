<?php

try {
	
	$mbp = new PDO('mysql:host=localhost;dbname=prueba', "alvaroz", "zambrana97");
	foreach ($mbp->query('SELECT * from FOO') as $fila) {
		print_r($fila);
	}
	$mbp = null;
} catch (PDOException $e) {
	print "Error: " . $e->getMessage() . "<br/>";
	die();
}
?>