<?php session_start(); ?>
<?php include ("dbcon.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>INDEX</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>

		<div class="form-wrapper">
			<form action="#" method="post">
				<h3>Login here</h3>
				<div class="form-item">
					<input type="text" name="username" required="required" placeholder="Username" autofocus required>
				</div>
				<div class="form-item">
					<input type="password" name="password" required="required" placeholder="Password" required>
				</div>
				<div class="button-panel">
					<input type="submite" class="button" title="Log in" name="login" value="login">
				</div>
			</form>
			<?php

				if (isset($_POST['login'])) {
					$username = msqli_real_escape_string($con, $_POST['username']);
					$password = msqli_real_escape_string($con, $_POST['password']);

					$query = msqli_query($con, "SELECT username,password FROM users WHERE username='$username' password='$password'");
					$row = mysqli_fetch_array($query);
					$num_row = mysqli_num_rows($query);

					if ($num_row > 0) {
						$_SESSION['user_id'] = $row['user_id'];
						header('location:home.php');
					} else {
						echo "Invalid Username and Password Combination";
					}
				}

	</body>
</html>