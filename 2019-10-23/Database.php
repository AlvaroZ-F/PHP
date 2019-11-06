<html>
		
		<head>
			<meta charset="utf-8"/>
			<title>Matricula Database Enter New Student</title>
			<style>
				fieldset {
 					display: block;
 					margin-left: 2px;
 					margin-right: 200px;
 					padding-top: 0.35em;
					padding-bottom: 0.625em;
 					padding-left: 0.75em;
					padding-right: 0.75em;
					border: 5px groove;
				}
			</style>
		</head>

		<body>

			<?php
				$dbServername = "localhost";
				$dbUsername = "alvaroz";
				$dbPassword = "zambrana97";
				$dbName = "Matricula";

				// Creates a new connection under the variable called "Conn"
				$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

				// Checks if the connection has been established and returns an error if not. Also 	informs if you're connected.
				if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
				} else {
					printf("Connection has been established correctly");
				}
			?>

		<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<fieldset>
				<br>
				Student's Name: <input type="text" name="name"> <?php $name = @$_POST['name'];?>
				<?php
					if (isset ($_POST['submit']) && empty($_POST['name'])) echo "<span style='color:red'> &lt;== Required Field </span>";
				?>
				<br><br>
				Student's Surname: <input type="text" name="surname"> <?php $surname = @$_POST['surname'];?>
				<?php
					if (isset ($_POST['submit']) && empty($_POST['surname'])) echo "<span style='color:red'> &lt;== Required Field </span>";
				?>
				<br><br>
				Student's Phone Number: <input type="text" name="phone"> <?php $phone = @$_POST['phone'];?>
				<?php
					if (isset ($_POST['submit']) && empty($_POST['phone'])) echo "<span style='color:red'> &lt;== Required Field </span>";
				?>
				<br><br>
				Course Selected: 
				<?php
					$quecourse = "SELECT idCurso FROM curso";
					$resultqc = $conn->query($quecourse);

					if ($resultqc->num_rows > 0) {
						// If the query gets more than 0 rows in the search, it enteres this filter.
						$count = 0;
						while ($row = $resultqc->fetch_assoc()) {
							// The function fetch_assoc() puts all the results into an array we can loop through, which we will through the while loop.
							echo "<input type='radio' name='course' value='#" . $count . "'>" . $count;
							$count++;
						}
					}
					$course = @$_POST['course'];
				?>
				<?php
					if (isset ($_POST['submit']) && empty($_POST['course'])) echo "<span style='color:red'> &lt;== Please choose one </span>";
				?>
				<br><br>
				<input type="submit" name="submit" value="Submit Application">
				<button type="submit" name="showdb" value="showdb" onclick="showAlumnoDB()">Show Alumno Database
			</fieldset>
		</form>

		<?php
		// SUBMIT BUTTON FUNCTIONALITY
			$query_idMatricula = "SELECT numMatricula FROM alumno";
			$numMat = $conn->query($query_idMatricula);

			function validateInsert() {
				if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['phone']) ||empty($_POST['course'])) {
					return False;
				} else {
					return True;
				}
			}

			function numMatCount($numMat) {
				$count = 0;

				if ($numMat->num_rows > 0) {
					while ($row = $numMat->fetch_assoc()) {
						$count++;
					}
				}

				return str_pad($count, 4, '0', STR_PAD_LEFT);

			}

			function courseChar($cur) {
				$cont = 1;

				if ($cur->num_rows > 0) {
					while ($row = $cur->fetch_assoc()) {
						$cont++;
					}
				}

				return str_pad($cont, 2, '0', STR_PAD_LEFT);
			}

			if (isset ($_POST['submit']) && validateInsert()) {
				$query_insert = "INSERT INTO alumno (numMatricula, Nombre, Apellidos, Telefono, Curso) VALUES ('" . numMatCount($numMat) . "', '" . $name . "', '" . $surname . "', " . $phone . ", '" . courseChar($resultqc) . "')";
				if ($conn->query($query_insert) === TRUE) {
					echo "New record has been created succesfully";
				} else {
					echo "Error: " . $query_insert . "<br>" . $conn->error;
				}
			}
		?>
		<?php
		//SHOWDB BUTTON FUNCTIONALITY
			$querySHOWDB = "SELECT * FROM alumno";
			$showDB = $conn->query($querySHOWDB);

			function showAlumnoDB() {
				if ($showDB->num_rows > 0) {
					echo "<br><br>===================== SEARCH RESULTS =============================<br>";
					while ($row = $showDB->fetch_assoc()) {
						echo "<p>";
						echo $row["numMatricula"];
						echo "-+-";
						echo $row["Nombre"];
						echo "-+-";
						echo $row["Apellidos"];
						echo "-+-";
						echo $row["Telefono"];
						echo "-+-";
						echo $row["Curso"];
						echo "</p>";
					}
				} else {
					echo "================ NO RESULTS FOUND ==================";
				}
			}
		?>
	</body>

</html>