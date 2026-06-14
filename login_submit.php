<?php
	session_start();

	include 'connectdb.php';

	$error = ""; // Message shown back on the login page when sign-in fails.

	// Lawyers and clients share the same login form but live in separate
	// tables, so the hidden "type" field tells me which one to authenticate
	// against and which dashboard to drop them on.
	if (isset($_POST['login']) && ($_POST['type'] == 'lawyer' || $_POST['type'] == 'client')) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		} else {
			$table = $_POST['type'] === 'lawyer' ? 'lawyers' : 'clients';

			$stmt = $db->prepare("SELECT * FROM $table WHERE pass = :pass AND username = :username");
			$stmt->execute(array(':pass' => $_POST['password'], ':username' => $_POST['username']));
			$row = $stmt->fetch();

			if ($row) {
				// Stash the profile in the session so the dashboards can render
				// without hitting the database again on every page.
				$_SESSION["login_username"]    = $row["username"];
				$_SESSION["login_firstname"]   = $row["firstname"];
				$_SESSION["login_lastname"]    = $row["lastname"];
				$_SESSION["login_city"]        = $row["city"];
				$_SESSION["login_country"]     = $row["country"];
				$_SESSION["login_display_pic"] = $row["display_pic"];

				if ($_POST['type'] === 'lawyer') {
					$_SESSION["login_experience"] = $row["experience"];
					$_SESSION["login_type"]       = 'lawyer';
					header("location: lawyer/profile.php");
				} else {
					$_SESSION["login_age"]  = $row["age"];
					$_SESSION["login_type"] = 'client';
					header("location: client/profile.php");
				}
			} else {
				$error = "Username or Password is invalid";
			}
		}
	}
?>
