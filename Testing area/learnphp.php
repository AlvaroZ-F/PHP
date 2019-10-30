<html>
	<head>
		<title>Information</title>
	</head>

	<body>

		<?php
			echo "<p>Data processed</p>";

			date_default_timezone_set('UTC');

			echo date('h:i:s:u a, l F jS Y e);')

			$usersName = $_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			$cityAddress = $_POST['cityaddress'];

			echo $usersName . "</br>";
			echo $streetAddress . "</br>";
			echo $cityAddress . "</br>";

			$str = <<<EOD
			The customers name is
			$
		?>

	</body>
</html>