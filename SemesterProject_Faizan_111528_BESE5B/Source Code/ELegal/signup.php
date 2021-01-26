<?php

include('signup_submit.php');

?>


<!DOCTYPE html>

<html>
<head>
	<title>Login-Wanderlust</title>
</head>

<body>
	<h1>Wanderlust</h1>
	<div id="signup_div" >
		<form method="post">
				<input class="text_box" style="border: 2px solid black;" type="text" name="firstname" placeholder="First name"><br><br>
				<input class="text_box" style="border: 2px solid black;" type="text" name="surname" placeholder="Surname"><br><br>
				<input class="text_box" style="border: 2px solid black;" type="text" name="username" placeholder="Username"><br><br>
				<input class="text_box" style="border: 2px solid black;" type="text" name="emailaddress" placeholder="Email Address"><br><br> 
				<input class="text_box" style="border: 2px solid black;" type="password" name="password" placeholder="New Password"><br><br>
				<input class="text_box" class="create_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 70%;" type="submit" name="signup" value="Sign up">		
		</form>
	</div>
	</body>

</html>
