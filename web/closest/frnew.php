<?php
include 'conn.php';
session_start();


$id=$_SESSION["uid"];
$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
$n=mysqli_num_rows($res);
for ($i=0; $i <$n ; $i++) { 
	$row=mysqli_fetch_array($res);
	$o=$row[2];
	$th=$row[9];

}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
								     <a href='frlistview.php' style='font-size: 15px; color:black;'>Friend list</a>
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
						<!--<div class="col-md-6">
							<ul class="nav text-center">
								<li><a href="index.html"><span>Work</span></a></li>
								<li class="active"><a href="inside.html">About</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>-->
						<!--<div class="col-md-3">
							<ul class="social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>-->
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
							<h1>Upload Document</h1>
							<h2></h2>
						</div>
					</div>
				</div>
			<div>
		</section>

		

		
		<section id="product">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-12 section-heading text-center">
						<h2><form>
							</form>
						</h2><b>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 subtext">
								<table width="100%" border="0">
				    <tr>
				    
				    </tr>
				    <tr>
				    <td>Receiver</td>
				  
				    <td>File Name</td>
				     
				    
				    </tr>
									<?php
										
										$sql="SELECT * FROM frshare where sname='$o'";
										$result_set=mysqli_query($conn,$sql);
										$n=mysqli_num_rows($result_set);

										for ($i=0; $i < $n; $i++) { 
										 	$row=mysqli_fetch_array($result_set);
											?> <tr>									        
									        <td><?php echo $row[1];
									        	 ?></td>
									        <td><?php echo $row[2]; 
									        	 ?></td></tr>
										<?php 
										}
										echo '</table>';
										?>

											
									</b>	
								</p>
							</div>
						</div>
					</div>
				</div>
				

	

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