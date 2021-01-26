<?php
// configuration
include('connectdb.php');

// new data
$id = $_POST['memi'];
$a = $_POST['case_id'];
$z = $_POST['username'];
$c = $_POST['case_title'];
$d = $_POST['progress'];
$e = $_POST['tasks_done'];
$f = $_POST['tasks_remaining'];$
$g = $_POST['appointments'];
$h = $_POST['case_description'];

// query
$sql = "UPDATE cases 
        SET case_id=?, username=?, case_title=?, progress=?, tasks_done=?, tasks_remaining=?, appointments=?, case_description=?
		WHERE case_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$z,$c,$d,$e,$f,$g,$h,$id));
header("location: cases.php");

?>