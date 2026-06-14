<?php
	session_start();

	include '../connectdb.php';

	// The whole question board, newest rows first as MySQL returns them.
	$questions = $db->query("SELECT * FROM questions")->fetchAll();
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
  font-family: Arial, sans-serif;
  min-height: 1000px;
}
#columns {
	column-width: 500px;
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
	width:460px;
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
  font-size: 18px;
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

	<br />
	


<h2> Questions </h2>

<div id="columns">
	
	<?php 
		// Show up to nine question cards; clicking one opens it in answer.php.
		for($i = 0; ($i < 9) && ($i < count($questions)); $i++) {
			$row = $questions[$i];
			echo"
				<figure id=\"" . $row['question_id'] . "\">
					<figcaption>" .  $row['title'] . "</figcaption>
				</figure>";
		}
	?>
	
</div>

	<script>
		$("figure").click(function() {
				var qid = $(this).attr('id');
				window.location.href = "answer.php?q=" + qid;
		});
	</script>

</body>