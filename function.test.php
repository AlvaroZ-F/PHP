<?php
	function añadir_algo($cadena)
	{
		$cadena .= ', y algo más.';
	}
	$cad = 'Esto es una cadena';
	añadir_algo($cad);
	echo $cad;
?>