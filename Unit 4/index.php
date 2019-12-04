<?php

	session_start();

	if (isset($_SESSION['username'])) {
		$_SESSION['msq'] = "You must log in first to view this page";
		header("location: login.php");
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>INDEX</title>
	</head>

	<body>
		
		<h1> This is the homepage</h1>

		<?php if(isset($_SESSION['success'])) : ?>

		<button> <a href="index.php?logout='1'" name="Logout"></a>Logout</button>

	<?php endif?>
	</body>
</html>