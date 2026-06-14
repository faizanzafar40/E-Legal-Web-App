<?php
include('connectdb.php');

// Save the edits made on editcase.php back onto the existing case row.
$sql = "UPDATE cases
        SET case_id = ?, username = ?, case_title = ?, progress = ?, tasks_done = ?, tasks_remaining = ?, appointments = ?, case_description = ?
        WHERE case_id = ?";
$stmt = $db->prepare($sql);
$stmt->execute(array(
	$_POST['case_id'],
	$_POST['username'],
	$_POST['case_title'],
	$_POST['progress'],
	$_POST['tasks_done'],
	$_POST['tasks_remaining'],
	$_POST['appointments'],
	$_POST['case_description'],
	$_POST['memi'],
));
header("location: cases.php");
?>
