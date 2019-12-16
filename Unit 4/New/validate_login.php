<?php

// Grab User submitted information
$username = $_POST["username"];
$pass = $_POST["password"];

// Connect to the database and table, and check if it connects.
$con = mysqli_connect('localhost', 'alvaroz','zambrana97', 'maindata') or die("Could not connect to database");

$selectQuery = "SELECT (username, password) FROM users WHERE username =" . $username;
$result = mysqli_query($con, $selectQuery);

$row = mysqli_fetch_array($result);

if($row["username"]==$username && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>