<?php
	include('connectdb.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM cases WHERE case_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditcase.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Case</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />

<span> Full Name : </span><input type="text" style="width:265px; height:30px;"  name="username" value="<?php echo $row['username']; ?>" /><br>
<span>Case Title : </span><input type="text" style="width:265px; height:30px;" name="case_title" value="<?php echo $row['case_title'];?>" /><br>
<span>Progress : </span><input type="number" style="width:265px; height:30px;" name="progress" value="<?php echo $row['progress'];?>" /><br>
<span>Tasks done : </span><textarea style="width:265px; height:50px;" name="tasks_done"><?php echo $row['tasks_done']; ?> </textarea><br> 
<span>Tasks remaining : </span><textarea style="width:265px; height:50px;" name="tasks_remaining"><?php echo $row['tasks_remaining']; ?> </textarea><br> 

<span>Appointments : </span><textarea style="width:265px; height:50px;" name="appointments"><?php echo $row['appointments']; ?> </textarea><br>
<span>Case Details : </span><textarea style="width:265px; height:50px;" name="case_description"><?php echo $row['case_description']; ?> </textarea><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>