<?php
	function mayorMenor(...$numeros){
		$min = 9999;
		$may = 0;
		foreach ($numeros as $n){
			if ($n <= $min){
				$min = $n;
			} elseif ($n >= $may){
				$may = $n;
			}
		}
		$array = array(
			"Menor" => ($min),
			"Mayor" => ($may)
		);
		return $array;
		print ("El menor es $array[1] y el mayor es $array[2]");
	}

	print_R(mayorMenor(2,4,7,9,15,3,1,5,60));