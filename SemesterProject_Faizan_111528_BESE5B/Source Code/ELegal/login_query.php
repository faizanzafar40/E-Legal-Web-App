<?php
include "connectdb.php"
?>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = test_input($_POST["email"]);
        $password = ($_POST["password"]);
    }

 $sql= "SELECT email, password FROM tutor WHERE email='$email' AND password='$password'";
 $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
            session_start();
       $_SESSION["user"]=TRUE;
       $_SESSION["email"]=$email;
      header('location: user_page.php');
} 
    else {
    session_start();
    $_SESSION["invalid"]=TRUE;
    header('location: index.php');
}
?>
