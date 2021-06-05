<?php
include 'conn.php';
session_start();

if (isset($_SESSION['uid'])) {
$id=$_SESSION['uid'];
$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
$n=mysqli_num_rows($res);
for ($i=0; $i <$n ; $i++) { 
	$row=mysqli_fetch_array($res);
	$th=$row[9];

}
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Closest &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<link rel="stylesheet" type="text/css" href="styhe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.new1{
			float: right;
			margin-right: 100px;
			top: -15px;
		}
		.new{

		}
		
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
	</style>
	</head>
	<body>
		<div class="box-wrap" style="background-image: url(<?php echo $th; ?>); background-size: contain;	background-size: cover; background-attachment: fixed;">
		<?php
		echo "<br>";
		echo "<center>";
	//echo "<form action='search5.php' method='POST'>";
	//echo "<input type='text' name='uname' width='50px'>";
	//echo "<button name='submit'><i class='fa fa-search'></i></button>";
	echo "</center>";
?>
<div class="new1">
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
      

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <li class="nav-item dropdown">
            <a class="nav-link" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" style="font-size: 28px;"></i>
              <?php
                $sql="select * from notification where status='unread' and uid='$id';";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);
                
               
              ?><span class="badge badge-light"><?php echo $n ?></span></a>
              <div class='dropdown-menu' aria-labelledby='dropdown01'>
              <?php
              for ($i=0; $i <$n ; $i++) { 
                	$row=mysqli_fetch_array($res);
                	$a=$row[0];
                	$q=$row[4];
            		 echo "
              				<a class='dropdown-item' href='view.php?id=".$a."'>"; 
                	echo $q."</a>";
                	} 
                	?></a>

</li>
</ul>
</div>
</div>
	<div class="box-wrap" style="background-image: url(<?php echo $th; ?>); background-size: contain;	background-size: cover; background-attachment: fixed;">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default" style="background-color: transparent;">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<div class='dropdown'>
									<?php 
									$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
									$n=mysqli_num_rows($res);
									for ($i=0; $i <$n ; $i++) { 
									$row=mysqli_fetch_array($res);
									$a=$row[2];
									$path=$row[8];
									echo "<img src='$path' height='100px' width='100px' style='border-radius: 50%;'></button>
								  	<div class='dropdown-content'><b>
								    <a href='theme4.php' style='font-size: 15px; color:black;'>theme</a>
								   
								    <a href='setting1.php' style='font-size: 15px; color:black;'>Change profile</a>
								     <a href='feed.php' style='font-size: 15px; color:black;'>Feedback</a>
								    <a href='logout.php' style='font-size: 15px; color:black;'>Logout</a></b>
								  </div>";
								  echo "&nbsp&nbsp&nbsp<b style='font-size:20px; ' >".$a."</b>";
								}
								?>
								</div>
								<!--<a class="fh5co-logo" href="index.html"><img src="images/brand-nav.png" alt="Closest Logo"></a>-->
							</div>
						</div>
						<div class="col-md-9">
							<ul class="nav text-center">
								<li class="active"><a href="index.php"><span>My Document</span></a></li>
								<li><a href="inside.php">Upload</a></li>
								<li><a href="services.php">Download</a></li>
								<li><a href="services1.php">Share</a></li>
								<li><a href="services2.php">Delete</a></li>
								<li><a href="services3.php">Friend Request</a></li>
								
							</ul>
						</div>
						
					</div>
				</nav>
		  </div>
		</header>
		<!-- END: header -->
		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h1>My Friends</h1>
							<h2></h2>
						</div>
					</div>
				</div>
			<div>
		</section>

		<section id="services">
			<div class="container">
				<div class="row"><center><b>
					<?php


	//$share=$_GET['share'];
	//$a=$_GET['a'];
	//$b=$_GET['b'];
	//$c=$_GET['c'];

	$ans9=mysqli_query($conn,"select *from reg_user where uid='$id'");
	$n9=mysqli_num_rows($ans9);
	echo "<table>";
	for ($i=0; $i <$n9 ; $i++) { 
		$row=mysqli_fetch_array($ans9);
		$q=$row[2];
	}

	$ans8=mysqli_query($conn,"select * from fr_list where uname='$q'");
	$n8=mysqli_num_rows($ans8);
	for ($i=0; $i <$n8; $i++) { 
		$row=mysqli_fetch_array($ans8);
		$f=$row[1];
				$ans1=mysqli_query($conn,"select * from reg_user where username='$f'");
					$n=mysqli_num_rows($ans1);
					for($i1=0;$i1<$n;$i1++)
					{
						$row=mysqli_fetch_array($ans1);
						
					
	echo "<b><table>";
	echo "<tr><td><img src='$row[8]' height='100' width='100' style='border-radius: 50%;'></td>";
	echo "<td>$f</td><td width='100'></td>
	
	</table></b>";
	
}
}
$ans12=mysqli_query($conn,"select * from fr_list where fname='$q'");
				$n12=mysqli_num_rows($ans12);
				for ($i12=0; $i12<$n12; $i12++) { 
					$row12=mysqli_fetch_array($ans12);
					$w=$row12[0];
							$ans14=mysqli_query($conn,"select * from reg_user where username='$w'");
								$n14=mysqli_num_rows($ans14);
								for($i14=0;$i14<$n14;$i14++)
								{
									$row14=mysqli_fetch_array($ans14);
										echo "<b><table>";
	echo "<tr><td><img src='$row14[8]' height='100' width='100' style='border-radius: 50%;'></td><td width='30'>    </td>";
	echo "<td>$w</td><td width='100'></td></tr>";

}

}
echo "</table>";
?>
					</center>
						
					</b>
				</div>
			</div>
		</section>

		

	

		<footer id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer-widget border">
							<p class="pull-left"><small>&copy; Closest Free HTML5. All Rights Reserved.</small></p>
							<p class="pull-right"><small> Designed by  <a href="http://freehtml5.co/" ta>freehtml5.co</a>  Images: <a href="https://unsplash.com/">Unsplash</a></small></p>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- END: box-wrap -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
<?php
}else{
	echo "<script>alert('plz first log in')</script>";
}

?>
