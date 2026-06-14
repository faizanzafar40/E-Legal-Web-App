<?php
session_start();

include('connectdb.php');

// Insert the case the lawyer just filled in on addcase.php, then send them
// back to the case list.
$sql = "INSERT INTO cases (username, case_title, progress, tasks_done, tasks_remaining, appointments, case_description)
        VALUES (:username, :case_title, :progress, :tasks_done, :tasks_remaining, :appointments, :case_description)";
$stmt = $db->prepare($sql);
$stmt->execute(array(
	':username'         => $_POST['username'],
	':case_title'       => $_POST['case_title'],
	':progress'         => $_POST['progress'],
	':tasks_done'       => $_POST['tasks_done'],
	':tasks_remaining'  => $_POST['tasks_remaining'],
	':appointments'     => $_POST['appointments'],
	':case_description' => $_POST['case_description'],
));
header("location: cases.php");
?>
