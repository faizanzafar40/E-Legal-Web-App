<?php
include 'header.php';
?>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Page</title>
	<link rel="stylesheet" type="text/css" href="marinka/css/style.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .main{
    width: 100%;
    margin-top: 70px;
}
        #sidebar,#content{
            border: 0;
        }
    </style>
</head>
<body id="page-top">
	<!-- start:main -->
    <?php
           include'connectdb.php';
           $email=$_SESSION["email"];
           $sql="SELECT * FROM tutor WHERE email='$email'";
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($result){
        while($row = mysqli_fetch_assoc($result)) {
            $user_name= $row['fname']." ".$row['lname'];
     }
}
    ?>

    <section class="main">
	<div class="container" id="main">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div id="sidebar">
					<div class="user">
						<div class="text-center">
							<img src="marinka/img/user.jpg" class="img-circle">
						</div>
						<div class="user-head">
							<h1><?php echo strtoupper($user_name);?></h1>
							<div class="hr-center"></div>
							<h5>Teacher and Tutor</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div id="content">
					<!-- start:main content -->
					<div class="main-content">
						<ul class="timeline">
							<!-- start:profile -->
							<li id="id-profile">
								<div class="timeline-badge default"><i class="fa fa-user"></i></div>
								<h1 class="timeline-head">PROFILE</h1>
							</li>
					        <li id="profile">
					          	<div class="timeline-badge primary"></div>
					          	<div class="timeline-panel">
					          		<h1>Hello, I am <strong><?php echo strtoupper($user_name);?></strong></h1>
					          		<h4>Available to Teach (Matric, FSC, O-Levels, A-Levels) </h4>
					          		
					          		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					          		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					          		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					          		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					          	</div>
					        </li>
					    </ul>
					</div>
					<!-- end:main content -->
				</div>
			</div>
		</div>
	</div>
 </section>
	<!-- end:main -->

</body>

<!-- Mirrored from bootemplates.com/themes/marinka/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jan 2017 11:54:15 GMT -->
</html>