<!DOCTYPE html>
<html>
<head>
	<title>My frame</title>
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
<?php
session_start();
if(isset($_SESSION['uid'])){
	$uid=$_SESSION['uid'];
	echo "<frameset rows='14%,86%'>
				<frame src='header.php' name='frame1'>
				<frameset cols='16%,84%'>
				<frame src='list.html' name='frame2'>
				<frame src='welcome.html' name='frame3'>
				</frameset>
				</frameset>";
}
else
{
	echo "<script>alert('first login website')</script>";
}
?>
</body>
</html>