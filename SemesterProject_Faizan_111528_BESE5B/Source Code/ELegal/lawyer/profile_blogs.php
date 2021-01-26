	<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "elegal2";
	$name = "murtaza";

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "SELECT * FROM articles WHERE username='" . $name . "' ORDER BY rating DESC";
	$result = $conn->query($sql);
	
	?>	
	

	<div id="my_blog">
	<h2> My Articles! </h2>
	<div id="columns">
		<?php 
		for($i = 0; ($i < 9) && ($i < $result->num_rows); $i++) {
			$row = $result->fetch_assoc();

			echo"<div id=\"article_entry\"> <h3>" .  $row['title'] . " <b>(" . $row["a_domain"] . ")</b></h3>";
			echo readfile("../articles/" . $row['article_id'] . ".txt");
			echo "</div>";

		}
		?> 
	</div>
	</div>
	
	<div id="new_blog">
		<h2> Create Article: </h2>
		<?php global $msg; echo $msg;?>
		<form action="" method="post" enctype="multipart/form-data" >
			<textarea class="title_box" rows="2" cols="50" style="border: 2px solid gray;" name="title" placeholder="Article title......"></textarea><br>
			<input style="border: 2px solid gray;" type="text" name="domain" placeholder="Enter Domain..."><br>
			<textarea class="article_box" rows="3" cols="50" style="border: 2px solid gray;" name="article" placeholder="Write new blog......"></textarea><br>
			<input class="login_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 100%; width: 80px;" type="submit" name="blogs_post" value="POST"><br><br>
		</form>
	</div>
	
	<script>
		$(".article_box").click(function(){
			$(this).attr({"rows" : "7", "cols" : "100"});
		});
	</script>