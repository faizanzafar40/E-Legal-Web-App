	<?php 
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "elegal2";
		$name = "murtaza";

		$conn = new mysqli($servername, $username, $password, $dbname);
	?>	
	

	<div id="my_blog">
		<h2> Questions Asked </h2>
	</div>
	<div id="my_blog">
		<p style="color:black; font-size:25px;"> Answered: </p>
		<div id="columns">
			<?php
				$sql = "SELECT * FROM questions WHERE client_name='" . $_SESSION["login_username"] . "' AND question_id IN (SELECT question_id FROM answers)";
				$result = $conn->query($sql);
				for($i = 0; ($i < 9) && ($i < $result->num_rows); $i++) {
					$row = $result->fetch_assoc();
					echo"  
					<figure id=\"" . $row['question_id'] . "\">
						<figcaption>" .  $row['title'] . "</figcaption>
					</figure>";	
				}
			?>

		</div>
	</div>
	
	<div id="my_blog">
		<p style="color:black; font-size:25px;"> Unanswered: </p>
		<div id="columns">
			<?php
				$sql = "SELECT * FROM questions WHERE client_name='" . $_SESSION["login_username"] . "' AND question_id NOT IN (SELECT question_id FROM answers)";
				$result = $conn->query($sql);
				for($i = 0; ($i < 9) && ($i < $result->num_rows); $i++) {
					$row = $result->fetch_assoc();
					echo"  
					<figure id=\"" . $row['question_id'] . "\">
						<figcaption>" .  $row['title'] . "</figcaption>
					</figure>";	
				}
			?>
		</div>
	</div>
	
	<script>
		$("figure").click(function() {
				var qid = $(this).attr('id');
				window.location.href = "answer.php?q=" + qid;
		});
	</script>
	
	<div id="new_blog">
		<p style="color:black; font-size:25px;"> Ask Question: <p>
		<?php global $msg; echo $msg;?>
		<form action="" method="post" enctype="multipart/form-data" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea class="article_box" rows="3" cols="50" style="border: 2px solid gray;" name="question" placeholder="Write new question......"></textarea><br>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="login_button" style="color: #FFF;background-color: #900;font-weight: bold;border: 2px solid black;font-size: 100%; width: 80px;" type="submit" name="blogs_post" value="POST"><br><br>
		</form>
	</div>
	
	<script>
		$(".article_box").click(function(){
			$(this).attr({"rows" : "7", "cols" : "100"});
		});
	</script>