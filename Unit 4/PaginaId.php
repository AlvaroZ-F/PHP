<!--
	Página de Identificación
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Pagina de identificacion</title>
		<style>
			fieldset {
				display: block;
				margin-left: 2px;
				margin-right: 400px;
				padding-top: 0.35em;
				padding-bottom: 0.625em;
				padding-left: 0.75em;
				padding-right: 0.75em;
				border: 3px groove;
			}
		</style>
	</head>

	<body>

		<form name="ident" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<?php include(errors.php) ?>
			<fieldset>
				<br>
				Username: <input type="text" name="username"/>
				<?php
					session_start();
					$error = array();
					$username = @$_POST['username'];
					if (isset ($_POST['submit']) && empty($_POST['name'])) echo "<span style='color:red'>&lt;== Required Field</span>";
				?>
				<br><br>
				Password: <input type="password" name="password"/>
				<?php
					$password = @$_POST['password'];
					if (isset ($_POST['submit']) && empty($_POST['password'])) echo "<span style='color:red'> &lt;== Required Field</span>";
					if (isset ($_POST['submit']) && $username==$password) echo "<span style='color:red'> &lt;== Username and Password must not coincide</span>";
				?>
				<br><br>
				<input type="submit" name="submit" value="Login">
				<br>
			</fieldset>
		</form>

		<?php

			$conn = mysqli_connect('localhost', 'alvaroz','zambrana97', 'maindata') or die("Could not connect to database");

			// Check database for existing usernames

			$username_check_query = "SELECT * FROM Users WHERE username = '$username' LIMIT 1";
			$result1 = mysqli_query($conn, $username_check_query);
			$user = mysqli_fetch_assoc($result1);

			if ($user) {
				if ($user['username'] === $username) array_push($error, "Username already exists");
			}

			// Register user

			if (count($error) == 0) {
				$secuser = md5($username);
				$secpass = md5($password);

				$query = "INSERT INTO users (username, password) VALUES (`$secuser`,`$secpass`)";

				mysqli_query($conn, $query);

				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You're now logged in";

				header('location: index.php');
			}



		?>
	</body>
</html>