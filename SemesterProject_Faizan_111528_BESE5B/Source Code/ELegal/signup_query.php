<?php
    include 'connectdb.php';
?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $phone = ($_POST["phone"]);
    $password = ($_POST["password"]);
    $city = ($_POST["city"]);
    $class = ($_POST["class"]);
    $courses = implode(",",$_POST["courses"]);
    $id=generate_uuid();
}
$user_name=$fname+$lname;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO tutor (id,fname, lname, email, phone, password)
VALUES ('$id','$fname','$lname','$email','$phone','$password')";
$sql2 = "INSERT INTO tutor_courses (t_id, class, courses, city)
    VALUES ('$id','$class','$courses','$city')";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) ) {
    session_start();
    $_SESSION["email"]=$email;
    $_SESSION["user"]=TRUE;
    $_SESSION['user_name']=$user_name;
    header('location: user_page.php');
    }
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>