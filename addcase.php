<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savecase.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Case</h4></center>
<hr>
<div id="ac">

<span> Client Name : </span><input type="text" style="width:265px; height:30px;"  name="username" required="yes" /><br>
<span>Case Title : </span><input type="text" style="width:265px; height:30px;" name="case_title"  /><br>
<span>Progress : </span><input type="number" style="width:265px; height:30px;" name="progress"  /><br>
<span>Tasks done : </span><textarea style="width:265px; height:50px;" name="tasks_done"></textarea><br> 
<span>Tasks remaining : </span><textarea style="width:265px; height:50px;" name="tasks_remaining"> </textarea><br> 

<span>Appointments : </span><textarea style="width:265px; height:50px;" name="appointments"></textarea><br>
<span>Case Details : </span><textarea style="width:265px; height:50px;" name="case_description"> </textarea><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
