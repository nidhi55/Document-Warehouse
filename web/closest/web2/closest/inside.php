<?php
include 'conn.php';
session_start();

if (isset($_SESSION['uid'])) {
$id=$_SESSION["uid"];
$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
$n=mysqli_num_rows($res);
for ($i=0; $i <$n ; $i++) { 
	$row=mysqli_fetch_array($res);
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
	echo "<form action='search5.php' method='POST'>";
	echo "<input type='text' name='uname' width='50px'>";
	echo "<button name='submit'><i class='fa fa-search'></i></button>";
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

		<!--<main id="main">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<h2>History</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>

					<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>

					<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
				</div>-->
				<!-- <div class="col-md-4"></div> 
			</div>
		</main>-->

		
		<section id="product">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-12 section-heading text-center">
						<h2><form>
							</form>
						</h2>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 subtext">
								<p><center>
									<form method="POST" action="upload.php" enctype="multipart/form-data">
										<input type="text" name="name"><br><br>
										<center><table><tr><td><input type="file" name="file"></center></td>
										<td><button type="submit" name="submit">
											<img src="image/upload.jpg" height="60px" width="120px">
										</button></td></tr></table>
									</center>
									</form>
									<?php
										/*if(isset($_POST['submit'])){
											$file=$_FILES['file'];

											$fileName=$_FILES['file']['name'];
											$fileTmpName=$_FILES['file']['tmp_name'];
											$fileSize=$_FILES['file']['size'];
											$fileError=$_FILES['file']['error'];
											$fileType=$_FILES['file']['type'];

											$fileExt=explode('.',$fileName);
											$fileActualExt= strtolower(end($fileExt));

											$allowed = array('jpg' ,'jpeg','png','pdf','ppt','doc','mp3',',mp4');
											if (in_array($fileActualExt, $allowed)) {
											if($fileError===0) {
												if ($fileSize<1000000) {
													$fileNameNew=$fileName.".".$fileActualExt;
													$fileDestination="upload/".$fileNameNew;
													move_uploaded_file($fileTmpName,$fileDestination);
													$sql="insert into a0$id(fname,type,size,fpath) values('$Name','$fileActualExte','$file_size','$fileDestination')";
													$res=mysql_query($sql);
													if($res){
														header("location:inside.php?uploadsuccess");
													}
												}else{
													echo "your file is too big!";
												}
											}else{
												echo "There was an error uploading your file!";
											}
											}
											else {
											echo "you can not upload file of this type!";
											}
										}*/


										
											/*$file = rand(1000,100000)."-".$_FILES['file']['name'];
   											$file_loc = $_FILES['file']['tmp_name'];
 											$file_size = $_FILES['file']['size'];
 											$file_type = $_FILES['file']['type'];
 											$folder="upload/";
 
 											// new file size in KB
 											$new_size = $file_size/1024;  
 											// new file size in KB
 
 											// make file name in lower case
 											$new_file_name = strtolower($file);
 											// make file name in lower case
 
 											$final_file=str_replace(' ','-',$new_file_name);
 											$p=move_uploaded_file($file_loc,$folder.$final_file);
 											if(move_uploaded_file($file_loc,$folder.$final_file))
 											{
  											$sql="INSERT INTO a0$id(fname,type,size,fpath) VALUES('$final_file','$file_type','$new_size','$p')";
 											mysql_query($sql);
  											?>
  											<script>
  												alert('successfully uploaded');
        									window.location.href='=inside.php?success';
        									</script>
  											<?php
 											}
 											else
 											{
  											?>
  											<script>
  												alert('error while uploading file');
        										window.location.href='inside.php?fail';
        									</script>
  											<?php
 											}
											}*/
											?>

											
										
								</p>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="row">
					<div class="post-entry">
						<div class="col-md-6">
							<div class="post animate-box">
								<a href="#"><img src="images/work-2.jpg" alt="Product"></a>
								<div>
									<h3><a href="#">Camera Lenses</a></h3>
									<p>Far far away, behind the word, far from the countries Vokalia</p>
									<span><a href="#">Learn More...</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="post animate-box">
								<a href="#"><img src="images/work-1.jpg" alt="Product"></a>
								<div>
									<h3><a href="#">Camera Lenses</a></h3>
									<p>Far far away, behind the word, far from the countries Vokalia</p>
									<span><a href="#">Learn More...</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="post animate-box">
								<a href="#"><img src="images/work-2.jpg" alt="Product"></a>
								<div>
									<h3><a href="#">Camera Lenses</a></h3>
									<p>Far far away, behind the word, far from the countries Vokalia</p>
									<span><a href="#">Learn More...</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="post animate-box">
								<a href="#"><img src="images/work-1.jpg" alt="Product"></a>
								<div>
									<h3><a href="#">Camera Lenses</a></h3>
									<p>Far far away, behind the word, far from the countries Vokalia</p>
									<span><a href="#">Learn More...</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="services">
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