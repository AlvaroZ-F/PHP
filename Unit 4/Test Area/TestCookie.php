<!DOCTYPE html>
<html>

	<head>
		<title>Cookie test</title>
	</head>
	<body>

		<?php

			setcookie("user_name", "Guru99", time()+ 60,'/');
			print_r($_COOKIE);

		?>

	</body>
</html>