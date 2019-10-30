<?php
	$arrayArecorrer= array(1,2,3,4,5,6,7,8,9,10,11,12,13);
	$suma=0;
	white(current($arrayArecorrer) != 13) {
		$suma = $suma + current($arrayArecorrer);
		next($arrayArecorrer);
	}
	echo $suma;
	echo "\n";
	echo key($arrayArecorrer);
?>