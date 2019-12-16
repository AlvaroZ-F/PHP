<?php
	// Start session
	session_start();

	// check whether the session variable SESSION_NAME is present or not
	if (!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: index.php");
		exit();
	}
	$session_name = $_SESSION['name'];
?>