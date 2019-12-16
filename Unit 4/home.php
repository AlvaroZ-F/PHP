<?php
	include("dbcon.php");
	include("session.php");

	$result = mysqli_query($con, "SELECT username,password FROM users WHERE username='$session_name'") or die ("Error in session");
	$row = mysqli_fetch_array($result);
?>

<html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div class="form-wrapper">
			<center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
			<div class="reminder">
				<p><a href="logout.php">Log out</a></p>
			</div>
		</div>
	</body>
</html>