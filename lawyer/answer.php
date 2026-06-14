<?php
	session_start();

	include '../connectdb.php';

	// Posting an answer stamps it with the signed-in lawyer's username.
	if (isset($_POST['ans_post'])) {
		$stmt = $db->prepare("INSERT INTO answers (answer, post_date, post_time, lawyer_name, question_id) VALUES (:answer, '2017-01-10', '04:07:00', :lawyer_name, :question_id)");
		$stmt->execute(array(
			':answer'      => $_POST['answer'],
			':lawyer_name' => $_SESSION['login_username'],
			':question_id' => $_POST['question_id'],
		));
	}

	// The question being answered, picked up from the ?q= id in the URL.
	$stmt = $db->prepare("SELECT * FROM questions WHERE question_id = :q");
	$stmt->execute(array(':q' => $_GET['q']));
	$question = $stmt->fetch();
?>


<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elegal Questions</title>
	<link href="../_css/jquery.bxslider.css" rel="stylesheet" />
	<link href="../_css/style.css" rel="stylesheet">
	<link href="../_css/nav.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/w3-favicon.png"/>
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
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/main.js"></script> <!--- For Navigation -->
<!---ADD NAVIGATION HERE-->
	
	<div class="nav-outer">
	<div class="nav-wrap">
		<nav class="navigation">
		<div class="nav" nav-menu-style="yoga">
			<ul class="nav-menu">
				<li><a href="profile.php">Profile</a></li>
				<li><a href="questions.php" style="font-weight: bold;" >Questions</a></li>
				<li><a href="../index.php">Logout</a></li>
			</ul>
		</div>
		</nav>
	</div>
	</div>
	<div class="nav-clear"></div>
<!--- End Navigation -->
	<div class="clearfix"></div>

<h2> Questions </h2>


<div id="colus">
	
	<?php 
	
		echo "<h3 style=\" color:black; text-align:left;\"> &nbsp;&nbsp;&nbsp;" . $question['title'] . "</h3>";

		$stmt = $db->prepare("SELECT * FROM answers WHERE question_id = :q");
		$stmt->execute(array(':q' => $_GET['q']));
		$answers = $stmt->fetchAll();
		echo "<h3 style=\"text-align:left\"> &nbsp;&nbsp;&nbsp;" . count($answers) . " Answers: </h3><hr>";
		foreach ($answers as $row) {
			echo "<p> <b>Answer by </b><span style=\"color:blue\">@" . $row['lawyer_name'] . "</span>:<br />";
			echo $row['answer'];
			echo "</p>";
		}
		
	?>
	
	<div id="new_ans">
		<h3 style="text-align:left"> &nbsp;&nbsp;&nbsp;Add answer: </h3>
		<?php global $msg; echo $msg;?>
		<form action="" method="post" enctype="multipart/form-data" >
			<textarea class="article_box" rows="3" cols="50" style="border: 2px solid gray;" name="answer" placeholder="Write answer......"></textarea><br>
			 <input type="hidden" name="question_id" value="<?php echo $_GET['q'];?>">
			<input class="login_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 100%; width: 80px;" type="submit" name="ans_post" value="POST"><br><br>
		</form>
	</div>
	
</div>



</body>