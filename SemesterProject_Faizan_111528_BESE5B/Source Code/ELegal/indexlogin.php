<?php

include('login_submit.php');
include('signup_submit.php');
?>

<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elegal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
			
	<div id="form_div" >
		<div id="login_div" >
				Lawyer:
				<form id="login_form" action="" method="post">
					<fieldset>
						<input  class="text_box" style="width:150px; border: 2px solid; position: relative; margin-left: 15px;" type="text" name="username" placeholder="Username or Email" ><br><br>
						<input id="password" class="text_box" style="width:150px; border: 2px solid; position: relative; margin-left: 15px;" type="password" name="password" placeholder="Password" ><br><br>
						<input type="hidden" name="type" value="lawyer">
						<input class="login_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 70%;" type="submit" name="login" value="LOGIN" >
					</fieldset>
				</form>
		</div>
		
		<div id="login_div" >
				Client:
				<form id="login_form" action="" method="post">
					<fieldset>
						<input  class="text_box" style="width:150px; border: 2px solid; position: relative; margin-left: 15px;" type="text" name="username" placeholder="Username or Email" ><br><br>
						<input id="password" class="text_box" style="width:150px; border: 2px solid; position: relative; margin-left: 15px;" type="password" name="password" placeholder="Password" ><br><br>
						<input type="hidden" name="type" value="client">
						<input class="login_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 70%;" type="submit" name="login" value="LOGIN" >
					</fieldset>
				</form>
		</div>
		
		<div id="create_div" >
				<p style="color: beige; text-align:center;">Don't have an account?</p>&nbsp;&nbsp;
				<input class="create_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 70%; width: 120px;" type="button" name="create" value="Home Page">
		</div>
	</div>
	
	<script>
		$(".create_button").click(function(){
			$("#form_div").load("index.php");
		});
	</script>
			
</body>
</html>