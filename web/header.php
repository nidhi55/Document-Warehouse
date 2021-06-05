<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document Warehouse</title>
	<link rel="stylesheet" type="text/css" href="styhe.css">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
	<link rel="stylesheet" type="text/css" href="log_style.css">
   <link rel="stylesheet" href="log_style.css" media="screen" type="text/css" />
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> 
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">	
</head>
<body>
	<div class="container1">
		<div id="header_wrapper1" style="height: 138px;">
			<div id="header1">
				<div class="header">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<h1 style="padding-top: 20px; padding-right: 10px;"><a href="#">Document Warehouse</a></h1>
							
						</div>
						<div class="navbar-header"><?php
						session_start();
						$uid=$_SESSION['uid'];
						$res=mysqli_query($conn,"select * from reg_user where uid='$uid'");
						$n=mysqli_num_rows($res);
						for ($i=0; $i <$n ; $i++) { 
						$row=mysqli_fetch_array($res);
						$a=$row[0];
						$b=$row[2];
						$path=$row[8];
						}
						echo "<h1 style='color:#da9d40; font-size:30px; padding-top:30px;height: 30px; width: 650px;'>Welcome user ".$b." </h1></div>";
						echo"<div class='navbar-header' style='text-align: right;margin-left:180px; '>
							<div class='navbar-header'><h1 style='font-size:18px;'>";
								//<a href='#'><img src='$path' height='70px' width='60px' style='border-radius: 50%''></a></h1>
							echo "<div class='dropdown'>
								  <button class='dropbtn'><img src='$path' height='80px' width='80px' style='border-radius: 50%''></button>
								  <div class='dropdown-content'>
								    <a href='#' style='font-size: 15px;'></a>
								    <a href='setting.php' style='font-size: 15px;'>Setting</a>
								    <a href='logout.php' style='font-size: 15px;'>Logout</a>
								  </div>
								</div>
							</div>
						</div>";
						?>
					</nav>
				</div>
			</div>
		</div>
	</div>
							
</body>
</html>
