<?php
	include('connectdb.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM cases WHERE case_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>