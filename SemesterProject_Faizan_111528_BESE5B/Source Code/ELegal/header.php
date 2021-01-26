<?php
session_start();
?>
<head>
    <!-- META KEYS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title>E-Legal</title>
    <link rel="icon" href="img/icon.jpg">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IcoFont CSS -->
    <link href="css/icofont.css" rel="stylesheet">

    <!-- FontAwesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- OWL CAROUSEL CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">

    <!-- ANIMATE CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Mobile Menu Css -->
    <link href="css/meanmenu.css" rel="stylesheet">

    <!-- PrettyPhoto CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <!-- DIRECTORY FONT -->
    <link href="font/stylesheet.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors Css -->
    <link href="css/color.css" rel="stylesheet">
    
    <!-- Child Css -->
    <link href="css/child/startup.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        table{
                width: 90%;
                border-collapse: separate;
                border-spacing: 0 .3em;
                margin: auto;
                overflow: auto;
            }
            th{
                width: 200px;
                height: 35px;
                color: Black;
                font-size: 14px;
                text-align: center;
                border-radius: 5px;
                font-weight: 500;
            }
td{
    text-align: center;
}
        select{
                width: 100%;
                height: 35px;
                font-size: 14px;
                font-weight: 400;
                padding-left: 25px;
                border-radius: 5px;
                border: 1px solid lightgrey;
        }
        input[type=checkbox]{
            width: 30%;
            padding: 0;
            margin: 0;
        }
            input{
                width: 100%;
                color: Black;
                height: 35px;
                font-size: 14px;
                padding: 8px;
                padding-left: 25px;
                font-weight: 400;
                border-radius: 5px;
                border: 1px solid lightgrey;
            }
textarea{
    padding: 5px;
    font-size: 14px;
    resize: none;
    border-radius: 5px;
    border: none;
}
#submit{
                background-color: #2dcc70;
                color: White;
                border: none;
                width: 180px;
                height: 35px;
                text-align: center;
                margin-top: 5%;
                margin-left: 35%;
                padding: 3px;
                font-size: 20px;
                border-radius: 5px;
            }
        /* .squaredThree */
.squaredThree {
  width: 20px;
  position: relative;
  margin: 20px auto;
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,.4);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }    
  }
}
/* end .squaredThree */
    </style>
</head>
    <header class="header-area">
        <!-- End Of Top Head -->
        <div class="head-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="mainmenu-area">
                        <nav class="navigation-menus">
                            <ul class="mobile-menu nav navbar-nav">
                                <li><a href="index.php">Home <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                   
                                </li>

                               
                                <li><a href="about.php">About <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                   
                                </li>

                               
                                <li><a href="contact.php">Contact  <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                    
                                </li>
                                <?php
                                    if(isset($_SESSION["user"])){
                                        echo '<li><a href="user_page.php" style="background-color: #ffd800; color: Black; font-size: 14px">'.strtolower($_SESSION['email']).'</a></li>
                                        <li><a href="signout.php" style="background-color: #ffd800; color: Black; font-size: 14px">Sign Out</a></li>';
                                    }
                                    else{
                                        
                                    }
?>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Bottom Head -->
    </header>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="border-radius: 10px;">
        <div class="modal-header" style="background-color: #2dcc70; border-radius: 10px 10px 0 0;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style="color: White;">LOGIN</h2>
        </div>
        <div class="modal-body">
          <form method="post" action="login_query.php">
        <table>
        <tr>
        <th>Email</th>
        <td><input type="text" name="email" placeholder="user name" required></td>
        </tr>
            <tr>
        <th>Password</th>
        <td><input type="password" name="password" placeholder="password" required></td>
        </tr>
        </table>
            <input type="submit" value="Login" id="submit">
        </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>

    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="border-radius: 10px;">
        <div class="modal-header" style="background-color: #2dcc70; border-radius: 10px 10px 0 0;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style="color: White;">SIGN UP</h2>
        </div>
        <div class="modal-body">
          <form method="post" action="signup_query.php">
        <table>
        <tr>
        <th>First Name</th>
        <td><input type="text" name="fname" placeholder="first name" required></td>
        </tr>
            <tr>
        <th>Last Name</th>
        <td><input type="text" name="lname" placeholder="last name" required></td>
        </tr>
            <tr>
        <th>Email</th>
        <td><input type="email" name="email" placeholder="email address" required></td>
        </tr>
            <tr>
        <th>Phone</th>
        <td><input type="text" name="phone" placeholder="phone number" required></td>
        </tr>
            <tr>
        <th>City</th>
        <td><input type="text" name="city" placeholder="enter city" required></td>
        </tr>
            <tr>
            <th>Select Class</th>
            <td><select name="class">
                  <option value="olevel">O-Levels</option>
                  <option value="alevel">A-Levels</option>
                  <option value="matric">Matric</option>
                  <option value="fsc">FSC</option>
                  <option value="all classes">All Classes</option>
                </select></td>
            </tr>
            </table>
              <table>
            <tr>
        <th>Master Courses</th>
        <td style="text-align: left; width: 10%"><input type="checkbox" name="courses[]" value="physics" required></td>
        <td style="text-align: left">PHYSICS</td>
        </tr>
            <tr>
        <th></th>
        <td style="text-align: left"><input type="checkbox" name="courses[]" value="chemistry" required></td>
                <td style="text-align: left">CHEMISTRY</td>
        </tr>
            <tr>
        <th></th>
        <td style="text-align: left"><input type="checkbox" name="courses[]" value="maths" required></td>
                <td style="text-align: left">MATHS</td>
        </tr>
                  </table>
              <table>
            <tr>
        <th>Password</th>
        <td><input type="password" name="password" placeholder="enter password" required></td>
        </tr>
        </table>

            <input type="submit" value="Sign Up" id="submit">
        </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>