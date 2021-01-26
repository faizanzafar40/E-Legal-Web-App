<!DOCTYPE html>
<html>
<?php
include 'connectdb.php';
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-register.css">

</head>

	
    
    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="#">
          <?php
if(isset($_POST['register'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $experience=$_POST['experience'];
  $city= $_POST['city'];
  $country= $_POST['country'];
  $username= $_POST['username'];
  $password= ($_POST['password']);
  $email= ($_POST['email']);
    $display_pic= ($_POST['display_pic']);

  if(empty($username) or empty($password) or empty($email)){
    $message="fields empty";
  }
  else{
    require_once("connectdb.php");
    $db->exec("INSERT INTO lawyers VALUES('$username','$password','$email', '$firstname', '$lastname', '$display_pic','$experience','$city','$country')");
    $message ="SUCESSFULLY REGISTERED";
    header("Location:indexlogin.php");
  }
  echo "<p>$message</p>";
}
?>


            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span> First Name</span>
                            <input type="text" name="firstname">
                        </label>
                    </div>


                    <div class="form-row">
                        <label>
                            <span> Last Name</span>
                            <input type="text" name="lastname">
                        </label>
                    </div>

                     <div class="form-row">
                        <label>
                            <span> Experience</span>
                            <input type="text" name="experience">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span> City</span>
                            <input type="text" name="city">
                        </label>
                    </div>


                    <div class="form-row">
                        <label>
                            <span> Country</span>
                            <input type="text" name="country">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>


                    <div class="form-row">
                        <label>
                            <span> Username</span>
                            <input type="text" name="username">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Picture</span>
                            <input type="text" name="display_pic">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="register">Register</button>
                    </div>

                </div>

                <a href="indexlogin.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>


        </form>

    </div>

</body>

</html>
