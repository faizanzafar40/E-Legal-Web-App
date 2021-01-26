<?php
session_start();

include('connectdb.php');

$b = $_POST['username'];
$c = $_POST['case_title'];
$d = $_POST['progress'];
$e = $_POST['tasks_done'];
$f = $_POST['tasks_remaining'];
$g = $_POST['appointments'];
$h = $_POST['case_description'];
// query
$sql = "INSERT INTO cases (username, case_title, progress, tasks_done, tasks_remaining, appointments, case_description) VALUES (:b,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h));
header("location: cases.php");


?>