<?php
	$tipo = @$_POST['vivienda'];
	$zona = @$_POST['zona'];
	$direccion = @$_POST['direccion'];
	$habitaciones = @$_POST['habitaciones'];
	$precio = @$_POST['precio'];
	$tamano = @$_POST['tamano'];
	$garaje = @$_POST['garaje'];
	$jardin = @$_POST['jardin'];
	$piscina = @$_POST['piscina'];
	$observaciones = @$_POST['observaciones'];

	echo "<h2>Inserción de Vivienda</h2>";

	if ($tipo == NULL || $precio == NULL) {
		echo "Debes introducir el tipo de vivienda y su precio<br>";
	} else {
		echo "<h3>Los datos introducidos son:</h3>";
		echo "El tipo de vivienda elegido es $tipo<br>";
		if ($zona) {
			echo "La zona seleccionada es $zona<br>";
		}
		if ($direccion) {
			echo "La direccion introducida es $direccion<br>";
		}
		if ($habitaciones) {
			echo "La casa cuenta con $habitaciones habitaciones<br>";
		}

		echo "Su precio es $precio €<br>";
		echo "Extras: <br>";
		if ($garaje) {
			echo "==>  $garaje <br>";
		}
		if ($piscina) {
			echo "==> $piscina <br>";
		}
		if ($jardin) {
			echo "==> $jardin <br>";
		}
		if (!empty($FILES['foto'])) {
			$path = "uploads/";
			$path = $path . basename($_FILES['foto']['name']);

			if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)) {
				echo "The file ". basename($_FILES['foto']['name']) . "has been uploaded";
			} else {
				echo "There's been an error and the image hasn't been uploaded. Please try again";
			}
		}
		if ($observaciones) {
			echo "<br> Observaciones: $observaciones<br>";
		}
	}

	echo "<a href='Vivienda.html'>Volver al formulario</a>";
?>