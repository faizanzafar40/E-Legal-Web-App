<div>
<?php
if(loggedin())
{
?>
<a href='index.php'> Home </a> ~
<a href='login.php'> Login </a> ~
<a href='Messages.php'> Message </a>
<?php
	
}
else {
?>
<a href='index.php'> Home </a> ~
<a href='logout.php'> Logout </a> ~
<a href='register.php'> Register </a>
<?php
}
?>
</div>