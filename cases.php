<html>
<head>
<title>
E-Legal
</title>


    <link rel="shortcut icon" href="main/img/pos.jpg">

 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('a[rel*=facebox]').facebox({
  loadingImage : 'src/loading.gif',
  closeImage   : 'src/closelabel.png'
})
})
</script>
</head>



<body>
<?php echo '<body style="background-color:grey">'; ?>
<div class="container-fluid">
    


<div style="margin-top: -19px; margin-bottom: 21px;">

<a  href="lawyer/profile.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php 
			include('connectdb.php');
				$result = $db->prepare("SELECT * FROM cases ORDER BY username DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
			
				<div style="text-align:center;">
			Total Cases:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
			</div>
			
			
</div>


<a rel="facebox" href="addcase.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Case</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: center;">
	<thead>
		<tr>
			<th width="12%"> Username </th>
			<th width="13%"> Case Title </th>
			<th width="7%"> Progress </th>
			<th width="9%"> Tasks Done </th>
			<th width="10%"> Tasks Remaining </th>
			<th width="6%"> Appointments </th>
			<th width="6%"> Case Details </th>
	
		</tr>
	</thead>
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}


				include('connectdb.php');
				$result = $db->prepare("SELECT *, username FROM cases ORDER BY username DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$total=$row['username'];
				$availableqty=$row['username'];
				if ($availableqty < 10) {
				echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
				}
				else {
				echo '<tr class="record">';
				}
					
				
			?>
		

			<td><?php echo $row['username']; ?></td>
						
			<td><?php echo $row['case_title']; ?></td>
			
			<td><?php echo $row['progress']; ?></td>
			
		
			<td><?php echo $row['tasks_done']; ?></td>
			<td><?php echo $row['tasks_remaining']; ?></td>
			<td><?php echo $row['appointments']; ?></td>
			<td><?php echo $row['case_description']; ?></td>
			
		
			<td><a rel="facebox" title="Click to edit the case" href="editcase.php?id=<?php echo $row['case_id']; ?>"><button class="btn btn-warning"><i class="icon-edit"></i>Edit</button> </a>
			<a href="#" id="<?php echo $row['case_id']; ?>" class="delbutton" title="Click to Delete the case"><button class="btn btn-danger"><i class="icon-trash"></i>Delete</button></a></td>
			</tr>
			<?php
				}
			?>
		
		
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this case?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletecase.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php'); 

?>
</html>