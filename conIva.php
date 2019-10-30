<?php
	function conIva($precio, $iva=0.21){
		$total = $precio + ($precio*$iva);
		return $total;
	}
	echo conIva(100);
?>