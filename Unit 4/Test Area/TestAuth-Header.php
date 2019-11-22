<!--

-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Test Header/Authentication</title>
	</head>

	<body>

		<?php

			if (!isset($_SERVER['PHP_AUTH_USER'])) {
				header('www-Authenticate: Basic realm="My Realm"');
				header('HTTP/1.0 401 Unathorized');
				echo "Text to send if user hits Cancel button";
				exit;
			} else {
				echo "<p> Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
				echo "<p> You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
			}
		?>
	</body>
</html>