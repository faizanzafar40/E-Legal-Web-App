<?php 
	session_start();
	//$msg = "";
	global $msg;
	$msg = "hello.";
	if (isset($_POST['blogs_post'])) {
		global $msg;

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "elegal2";
		$name = "murtaza";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "INSERT INTO `questions` (`title` , `post_date`, `post_time`, `client_name`) VALUES ('" . $_POST['question'] . "', '2017-01-10', '04:07:00', '" . $_SESSION["login_username"] . "')";
		if($conn->query($sql) === TRUE){
			global $msg;
			$msg = "Query successful.";
		}
		else {
				global $msg;
				$msg = "Query failed.";
			}
		
		
		/*
		$sql = "select * from articles where title='" . $_POST['title'] . "'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		

		$myfile = fopen("../articles/" . $row['article_id'] . ".txt", "w") or die("Unable to open file!");
		$txt = $_POST['article'];
		fwrite($myfile, $txt);
		fclose($myfile);
		*/
		
		$conn->close();
	}
	
		if (isset($_POST['tips_post'])) {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wanderlustdb";
		$name = "murtaza";
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sql = "INSERT INTO `articles` (`article_type`, `title`, `city`, `country`, `rating`, `post_date`, `post_time`, `username`) VALUES ('tip', '" . $_POST['title'] . "', '" . $_POST['city'] . "', '" . $_POST['country'] . "', '0', '2017-01-10', '04:07:00', '" . $_SESSION['login_username'] . "')";
		if($conn->query($sql) === TRUE){
			$msg = "Query successful.";
		}
		else {
				$msg = "Query failed.";
			}
		
		
		
		$sql = "select * from articles where title='" . $_POST['title'] . "'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		

		$myfile = fopen("articles/" . $row['article_id'] . ".txt", "w") or die("Unable to open file!");
		$txt = $_POST['article'];
		fwrite($myfile, $txt);
		fclose($myfile);

		
		
		$sql = "INSERT INTO images (`article_id`) VALUES ('" . $row['article_id'] . "')";
		if($conn->query($sql) === TRUE){
			$msg = "Image Query successful.";
		}
		else {
				$msg = "Image Query failed.";
			}
		
		$sql = "select * from images where article_id='" . $row['article_id'] . "'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		
		$target_dir = "articles/images/";
		//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir . $row['image_id'] . ".jpg";
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		$conn->close();
	}
	
	
	
	
	
	
		if (isset($_POST['wotl_post'])) {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wanderlustdb";
		$name = "murtaza";
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sql = "INSERT INTO `articles` (`article_type`, `title`, `city`, `country`, `rating`, `post_date`, `post_time`, `username`) VALUES ('wotl', '" . $_POST['title'] . "', '" . $_POST['city'] . "', '" . $_POST['country'] . "', '0', '2017-01-10', '04:07:00', '" . $_SESSION['login_username'] . "')";
		if($conn->query($sql) === TRUE){
			$msg = "Query successful.";
		}
		else {
				$msg = "Query failed.";
			}
		
		
		
		$sql = "select * from articles where title='" . $_POST['title'] . "'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		

		$myfile = fopen("articles/" . $row['article_id'] . ".txt", "w") or die("Unable to open file!");
		$txt = $_POST['article'];
		fwrite($myfile, $txt);
		fclose($myfile);

		
		
		$sql = "INSERT INTO images (`article_id`) VALUES ('" . $row['article_id'] . "')";
		if($conn->query($sql) === TRUE){
			$msg = "Image Query successful.";
		}
		else {
				$msg = "Image Query failed.";
			}
		
		$sql = "select * from images where article_id='" . $row['article_id'] . "'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		
		$target_dir = "articles/images/";
		//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir . $row['image_id'] . ".jpg";
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		$conn->close();
	}
?>



<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elegal - <?php echo $_SESSION["login_firstname"]; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../_js/profile.js"></script>
	<link href="../_css/jquery.bxslider.css" rel="stylesheet" />
	<link href="../_css/style.css" rel="stylesheet">
	<link href="../_css/nav.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/w3-favicon.png"/>
	<link href="../_css/profile.css" rel="stylesheet">
	
		<style>
		@font-face{font-family:'Calluna';
 src:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/callunasansregular-webfont.woff') format('woff');
}
body {
	background: url(//subtlepatterns.com/patterns/scribble_light.png);
  font-family: Arial, sans-serif;
  min-height: 1000px;
}
#columns {
	column-width: 320px;
	column-gap: 15px;
    width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}

div#columns figure {
	background: #fefefe;
	border: 2px solid #fcfcfc;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	padding: 15px;
	width:310px;
	padding-bottom: 10px;
	transition: opacity .4s ease-in-out;
  display: inline-block;
  column-break-inside: avoid;
}

div#columns figure img {
	width: 100%; height: auto;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: 20px;
  color: #444;
  line-height: 1.5;
}

div#columns small { 
  font-size: 1rem;
  float: right; 
  text-transform: uppercase;
  color: #aaa;
} 

div#columns small a { 
  color: #666; 
  text-decoration: none; 
  transition: .4s color;
}

div#columns:hover figure:not(:hover) {
	opacity: 0.4;
}

@media screen and (max-width: 750px) { 
  #columns { column-gap: 0px; }
  #columns figure { width: 100%; }
}
	</style>
</head>
<body>
	<a name="home">
<!--- Start Navigation -->
		<script src="../_js/jquery-1.11.2.min.js"></script>
		<script src="../_js/main.js"></script> <!--- For Navigation -->
<!---ADD NAVIGATION HERE-->
	
	<div class="nav-outer">
	<div class="nav-wrap">
		<nav class="navigation">
		<div class="nav" nav-menu-style="yoga">
			<ul class="nav-menu">
				<li><a href="profile.php" style="font-weight: bold;" >Profile</a></li>
				<li><a href="questions.php">Questions</a></li>
				<li><a href="../index.php">Logout</a></li>
			</ul>
		</div>
		</nav>
	</div>
	</div>
	<div class="nav-clear"></div>
<!--- End Navigation -->
	
	<div class="clearfix"></div>



	<a href="display_pic/1.jpg" target="_blank"><img id="display_pic" src="display_pic/1.jpg" 	width="140px" height="140px";/></a>

	<div id="profile_info">
		<p><b><?php echo $_SESSION['login_firstname'] . " " . $_SESSION['login_lastname']; ?></b></p>
		<p>Age: <?php echo $_SESSION['login_age']; ?> years</p>
		<p>Location: <?php echo $_SESSION['login_city'] . ", " . $_SESSION['login_country']; ?></p>
	</div>
		
	<br><br><br>

	<div id="article_header">
		<div class="article_tab" id="article_tab1">My Questions</div><div class="article_tab" id="article_tab2">My Cases</div>
	</div>
	
	<div id="article_div">
	</div>
	
	<script>
		$("#article_tab1").css({"background-color": "#d7bdb7", "font-weight": "bold", "text-decoration": "underline"});
		$("#article_tab2").css({"background-color": "#D3D3D3"});
		$("#article_tab3").css({"background-color": "#DEB887"});
		$("#article_div").load("profile_blogs.php");
	</script>
	
	<div class="clearfix"></div>
	
	
	
	</body>