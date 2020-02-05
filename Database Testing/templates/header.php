<?php

	session_start();

	// QUERY_STRING checks out the values right after the website URL http://ad.com"?something=asdad.
	if($_SERVER['QUERY_STRING'] == 'noname'){
		unset($_SESSION['name']); //Cleans the session by 'name'
		// session_unset(); would clean up all the session data.
	}

	$name = $_SESSION['name'] ?? 'Guest'; // If first value doesn't exist, then it equals to the second.

	// Get Cookie
	$gender = $_COOKIE['gender'] ?? "Unknown";

?>

<head>
	<title>Database Testing</title>
	<link rel="stylesheet" 
		href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<style type="text/css">
		.brand {
			background: #cbb09c !important;
		}
		.brand-text {
			color: #cbb09c !important;
		}
		form {
			max-width: 460px;
			margin: 20px auto;
			padding: 20px;
		}
		.device {
			max-width: 100px;
			margin: 40px auto -30px;
			display: block;
			position: relative;
			top: 10px;
		}
	</style>
</head>	
<body class="grey lighten-4">
	<nav class="white z-depth-0">
		<div class="container">
			<a href="index.php" class="brand-logo brand-text">PHP Database</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li class="grey-text"> Hello <?php echo htmlspecialchars($name); ?></li>
				<li class="grey-text"> (<?php echo htmlspecialchars($gender); ?>)</li>
				<li><a href="add.php" class="btn brand z-depth-0">Add a record</a></li>
			</ul>
		</div>
	</nav>
