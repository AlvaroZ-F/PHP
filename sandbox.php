<?php

	// Ternary operators.
	$score = 50;

	if($score > 40){
		echo"high score";
	} else {
		echo "low score";
	}
	//Condition ? True : False; TERNARY OPERATOR.
	$val = $score > 40 ? 'high score' : 'low score';
	echo $val;

	echo "<br />";
	// SUPERGLOBALS.
	
	// $_GET['name'], $_POST['name'] <-- These are superglobals.

	echo $_SERVER['SERVER_NAME'] . '<br />';
	echo $_SERVER['REQUEST_METHOD'] . '<br />';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	echo $_SERVER['PHP_SELF'] . '<br />';

	// $_SESSION, $_COOKIE

	if(isset($_POST['submit'])){

		// Cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
	}

	$result_devices='';
	$result_hardware='';

	if (isset($_POST['submit_device'])) {
		include("config/connect.php");

		$device_search = $_POST['find_device'];

		$sql_devices = "SELECT * FROM pcs WHERE name='" . $device_search . "'";

		$result_devices = $conn->query($sql_devices);
	}

	if (isset($_POST['submit_hardware'])) {
		include("config/connect.php");

		$hardware_search = $_POST['find_hardware'];

		$sql_hardware = "SELECT * FROM hardwares WHERE name='" . $hardware_search . "'";

		$result_hardware = $conn->query($sql_hardware);
	}

?>

<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<input type="text" name="name" />
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<input type="submit" name="submit" value="submit" />
		</form>


		
	<h4 class="center grey-text">Device Search:</h4>
	<div class="container">
		
		<div class="row">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<input type="text" name="find_device" placeholder="search for any device..." />
				<input type="submit" name="submit_device" class="btn brand z-depth-0" value="submit_device" />
			</form>
		</div>

		<div class="row">
			
			<?php while($devices_cus = $result_devices->fetch(PDO::FETCH_ASSOC)): ?>
				
			<div class="col s6 md3">
				<div class="card z-depth-0">
					<img src="img/device.svg" class="device">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($devices_cus['name']); ?></h6>
						<div><?php echo htmlspecialchars($devices_cus['type']); ?></div>
						<div><?php echo htmlspecialchars($devices_cus['description']); ?></div>
						<div><?php echo htmlspecialchars($devices_cus['brand']); ?></div>
					</div>
					<div class="card-action right-align">
						<a href="detailsDevice.php?id=<?php echo $devices_cus['id'] ?>" class="brand-text">More Info</a>
					</div>
				</div>
			</div>

			<?php endwhile; ?>

		</div>
		
	</div>

	<h4 class="center grey-text">Hardware Search:</h4>
	<div class="container">
		
		<div class="row">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<input type="text" name="find_hardware" placeholder="search for any hardware..." />
				<input type="submit" name="submit_hardware" class="btn brand z-depth-0" value="submit_hardware" />
			</form>
		</div>

		<div class="row">
				
			<?php if(isset("submit_hardware")): while($hardware_cus = $result_hardware->fetch(PDO::FETCH_ASSOC)): ?>
				
			<div class="col s6 md3">
				<div class="card z-depth-0">
					<img src="img/device.svg" class="hardware">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($hardware_cus['name']); ?></h6>
						<div><?php echo htmlspecialchars($hardware_cus['type']); ?></div>
						<div><?php echo htmlspecialchars($hardware_cus['description']); ?></div>
						<div><?php echo htmlspecialchars($hardware_cus['brand']); ?></div>
					</div>
					<div class="card-action right-align">
						<a href="detailsHardware.php?id=<?php echo $hardware_cus['id'] ?>" class="brand-text">More Info</a>
					</div>
				</div>
			</div>

			<?php endwhile; endif; ?>

		</div>
		
	</div>

	</body>
</html>