<?php 
	session_start();

	$error=""; // Variable To Store Error Message
	if (isset($_POST['login']) && $_POST['type'] == 'lawyer') {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		} else {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "elegal2";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error) {
				die("Failed to connect to MySQL." . $conn->connect_error);
			}

			$sql = "select * from lawyers where pass='" . $_POST['password'] . "' AND username='" . $_POST['username'] . "'";
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION["login_username"] = $row["username"]; // Initializing Session
				$_SESSION["login_firstname"] = $row["firstname"]; // Initializing Session
				$_SESSION["login_lastname"] = $row["lastname"]; // Initializing Session
				$_SESSION["login_experience"] = $row["experience"]; // Initializing Session
				$_SESSION["login_city"] = $row["city"]; // Initializing Session
				$_SESSION["login_country"] = $row["country"]; // Initializing Session
				$_SESSION["login_display_pic"] = $row["display_pic"]; // Initializing Session
				$_SESSION["login_type"] = 'lawyer'; // Initializing Session
				
				header("location: lawyer/profile.php"); // Redirecting To Other Page
			
			} else {
				$error = "Username or Password is invalid";
			}

			$conn->close();
		}
	}
	
	if (isset($_POST['login']) && $_POST['type'] == 'client') {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		} else {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "elegal2";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error) {
				die("Failed to connect to MySQL." . $conn->connect_error);
			}

			$sql = "select * from clients where pass='" . $_POST['password'] . "' AND username='" . $_POST['username'] . "'";
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$_SESSION["login_username"] = $row["username"]; // Initializing Session
				$_SESSION["login_firstname"] = $row["firstname"]; // Initializing Session
				$_SESSION["login_lastname"] = $row["lastname"]; // Initializing Session
				$_SESSION["login_age"] = $row["age"]; // Initializing Session
				$_SESSION["login_city"] = $row["city"]; // Initializing Session
				$_SESSION["login_country"] = $row["country"]; // Initializing Session
				$_SESSION["login_display_pic"] = $row["display_pic"]; // Initializing Session
				$_SESSION["login_type"] = 'client'; // Initializing Session
				
				header("location: client/profile.php"); // Redirecting To Other Page
			
			} else {
				$error = "Username or Password is invalid";
			}

			$conn->close();
		}
	}
?>


