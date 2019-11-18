<!DOCTYPE html>
<html>
	<head>
		<title>Example Exam 01</title>
	</head>
	<body>
		<?php
			/*
				Definir un array con los siguientes valores (cadena vacia, cero y null). Hacer un recorrido de ese array que imprima el valor isset de cada punto del array.
			*/

				$valor = ['', 0, null];

				for ($i=0; $i<=count($valor, COUNT_NORMAL)-1; $i++) {
					echo isset($valor[$i]);
					echo "<br>";
				}
		?>
	</body>
</html>