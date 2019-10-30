<? php
/*
	Crear una función iva que devuelva el precio introducido con iva.
	dicho iva tendrá un valor determinado que puede ser cambiado si
	aparte del precio se introduce un iva determinado.
*/

	function precio_iva($precio, $iva=0.18) {
		$precio *= (1+$iva);
	}
	$precio = precio_iva(10);
	print "El precio con IVA es ."$precio
?>