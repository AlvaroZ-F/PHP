<!--
	Página de Identificación
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Pagina de identificacion</title>
	</head>

	<body>

		<?php
			$dbServername = "localhost";
			$user = $_SERVER['PHP_AUTH_USER'];
			$password = $_SERVER['PHP_AUTH_PW'];
			if (!isset($user)) {
				header('WWW-Authenticate: Basic realm="localhost"');
				header('HTTP/1.1 401 Unathorized');
			} 
			if (isset($user)) {
				$us = 'alvaroz';
				$pswd = 'zambrana97';
				if ($user == $us && $password == $pswd) {
					echo "Correctly authenticated";
				} else {
					header('WWW-Authenticate: Basic realm="localhost"');
					header('HTTP/1.1 401 Unathorized');
				}
			}
		?>

	</body>
</html>