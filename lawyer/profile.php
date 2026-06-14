<?php
	session_start();
	global $msg;
	$msg = "hello.";

	include '../connectdb.php';

	// Posting a new article saves its metadata to the articles table and the
	// body text to a matching ../articles/<id>.txt file that the profile reads
	// back when it lists the article.
	if (isset($_POST['blogs_post'])) {
		$name = "murtaza";
		$stmt = $db->prepare("INSERT INTO articles (title, a_domain, rating, post_date, post_time, username) VALUES (:title, :domain, '0', '2017-01-10', '04:07:00', :name)");
		$ok = $stmt->execute(array(
			':title'  => $_POST['title'],
			':domain' => $_POST['domain'],
			':name'   => $name,
		));
		$msg = $ok ? "Query successful." : "Query failed.";

		$stmt = $db->prepare("SELECT * FROM articles WHERE title = :title");
		$stmt->execute(array(':title' => $_POST['title']));
		$row = $stmt->fetch();

		$myfile = fopen("../articles/" . $row['article_id'] . ".txt", "w") or die("Unable to open file!");
		fwrite($myfile, $_POST['article']);
		fclose($myfile);
	}
?>



<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elegal</title>
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
  font-family: Calluna, Arial, sans-serif;
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
  font-size: .9rem;
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
				<li><a href="../cases.php" style="font-weight: bold;" >Cases</a></li>
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
		<p>Experience: <?php echo $_SESSION['login_experience']; ?> years</p>
		<p>Location: <?php echo $_SESSION['login_city'] . ", " . $_SESSION['login_country']; ?></p>
	</div>
		
	<br><br><br>

	<div id="article_header">
		<div class="article_tab" id="article_tab1">My Articles</div><div class="article_tab" id="article_tab2">My Cases</div>
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