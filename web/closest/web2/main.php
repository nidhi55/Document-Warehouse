
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Closest &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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

	</head>
	<body>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html"><img src="images/brand-nav.png" alt="Closest Logo"></a>
							</div>
						</div>
						<div class="col-md-7">
							<ul class="nav text-center">
								<li class="active"><a href="index.html"><span>My Document</span></a></li>
								<li><a href="inside.html">Upload</a></li>
								<li><a href="services.html">Download</a></li>
								<li><a href="contact.html">Share</a></li>
								<li><a href="contact.html">Delete</a></li>
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
							<h2>We are web agency based in London &amp; we love functional &amp; meaningful design.</h2>
						</div>
					</div>
				</div>
			<div>
		</section>
		<?php
		include 'conn.php';
		session_start();
		$id=$_SESSION['uid'];
		$sql='select * from a0$id';
		$res=mysqli_query($conn,$sql);
		$n=mysqli_num_rows($res);
		
		?>
		<section id="work">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(images/work-1.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(images/work-2.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="fh5co-grid animate-box" style="background-image: url(images/work-5.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-grid animate-box" style="background-image: url(images/work-4.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-12">
						<div class="fh5co-grid animate-box" style="background-image: url(images/work-3.jpg);">
							<a class="image-popup text-center" href="#">
								<div class="work-title">
									<h3>Ampersand</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>

				</div>
			<div>
		</section>

		<!--<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="service">
							<div class="service-icon">
								<i class="icon-command"></i>
							</div>
							<h2>Brand Identity</h2>	
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="service">
							<div class="service-icon">
								<i class="icon-drop2"></i>
							</div>
							<h2>Web Design &amp; UI</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="service">
							<div class="service-icon">
								<i class="icon-anchor"></i>
							</div>
							<h2>Development &amp; CMS</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						</div>
					</div>
				</div>
			</div>
		</section>-->

		<footer id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
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

