<?php
	$resultado = 25;
	function sumatorio(&$suma, ...$numeros){
		$suma=0;
		foreach ($numeros as $n){
			$suma+=$n;
		}
		return $suma;
	}
	echo $resultado;
	echo "\n";
	echo (sumatorio($resultado, 1, 2, 3));
	echo "\n";
	echo $resultado
?>