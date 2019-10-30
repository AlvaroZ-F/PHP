<?php
	function hacer_cafe($tipo = "capuchino") {
		return "Hacer una taza de $tipo.\n";
	}
	echo hacer_cafe();
	echo hacer_cafe(null);
	echo hacer_cafe("expresso");
?>