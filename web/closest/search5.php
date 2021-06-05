<?php
session_start();
include 'conn.php';

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
	<title>Document Warehouse</title>
	<link rel="stylesheet" type="text/css" href="styhe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style type="text/css">
	table{
		margin-left: 25%;
	}
</style>
	</head>
	<body>
		<div class="box-wrap" style="background-image: url(<?php echo $th; ?>); background-size: contain;	background-size: cover; background-attachment: fixed;">
		<?php
		echo "<br>";
		echo "<center>";
	echo "<form action='search5.php' method='POST'>";
	echo "<input type='text' name='uname' width='50px'>";
	echo "<button name='submit1'><i class='fa fa-search'></i></button>";
	echo "</center>";
?>
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
							<h1>Send Request</h1>
							<h2></h2>
							<?php
	
	$ans9=mysqli_query($conn,"select *from reg_user where uid='$id'");
	$n9=mysqli_num_rows($ans9);
	for ($i=0; $i <$n9 ; $i++) { 
		$row=mysqli_fetch_array($ans9);
		$q=$row[2];
	}
	

	if (isset($_POST['submit1'])) 
	{
		$nm=$_POST['uname'];
	
	
		$ans8=mysqli_query($conn,"select * from fr_list where uname='$q' and fname='$nm'");
		$n8=mysqli_num_rows($ans8);
		$ans18=mysqli_query($conn,"select * from fr_list where uname='$nm' and fname='$q'");
		$n18=mysqli_num_rows($ans18);
		if ($n8!=0 or $n18!=0) {
			echo "Already Friends";
		}
		else{
		/*if ($n18!=0) {
			header("location:index.php");
		}*/
		if ($nm==$q) {
			echo "Not be friend yourself";		}
		else{
		$ans=mysqli_query($conn,"select * from reg_user where username='$nm'");
		$n=mysqli_num_rows($ans);

		if ($n!=0) {
			for ($i=0; $i <$n ; $i++) { 
				$row=mysqli_fetch_array($ans);
				$id2=$row[0];
				$a=$row[2];
				$b=$row[8];
			}
			$c=$q;
			echo "<table><center>";
		echo "<tr><td><img src='$b' height='100' width='100' style='border-radius: 50%;'>&nbsp</td>";
		echo "<td><b>$a&nbsp</b></td>";
		echo "<td><a href='req.php ?id=$id&a=$a&c=$c'><img src='image/request.jpg' height='40' width='150'>&nbsp</a></td>";
		echo "</table></center>";
		}
		else
		{
			echo "Not exists";
		}
	}
		
}
}
	else
	{
		echo "<script>alert('username is not found')</script>";
	}



?>
						</div>
					</div>
				</div>
			<div>
		</section>

		<section id="services">
			<div class="container">
				<div class="row"><center>
					
	
					
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

