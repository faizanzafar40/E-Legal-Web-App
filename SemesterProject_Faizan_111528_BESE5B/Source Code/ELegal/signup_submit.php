<?php 

	if (isset($_POST['signup'])) {
		//if (empty($_POST['username']) || empty($_POST['password'])) {
		//	$error = "Username or Password is invalid";
		//} else {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "wanderlustdb";

			$conn = new mysqli($servername, $username, $password, $dbname);
				echo "hi";
			if($conn->connect_error) {
				die("Failed to connect to MySQL." . $conn->connect_error);
			}
			
			$sql = "insert into users (username, pass, email, firstname, surname) values ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['emailaddress'] . "', '" . $_POST['firstname'] . "', '" . $_POST['surname'] . "')";

			if($conn->query($sql) === TRUE) {
				$sql = "select * from users where pass='" . $_POST['password'] . "' AND username='" . $_POST['username'] . "'";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$_SESSION["login_username"] = $row["username"]; // Initializing Session
				$_SESSION["login_firstname"] = $row["firstname"]; // Initializing Session
				$_SESSION["login_surname"] = $row["surname"]; // Initializing Session
				$_SESSION["login_about"] = $row["about"]; // Initializing Session
				$_SESSION["login_display_pic"] = $row["display_pic"]; // Initializing Session
				
				header("location: profile.php"); // Redirecting To Other Page
			
			} else {
				$error = "Oops! You made a mistake.";
				echo $error;
			}

			$conn->close();
		//}
	}
?>