<?php
include 'conn.php';
session_start();
$id=$_SESSION['uid'];
$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
$n=mysqli_num_rows($res);
for ($i=0; $i <$n ; $i++) { 
	$row=mysqli_fetch_array($res);
	$th=$row[9];
}
?>

</!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text]{
			width: 18%;
			height: 32px;
			padding-right: 2px;
			padding-top: 2px;
			padding-bottom: 2px;
		}
		input[type=submit],input[type='file']{
			width: 89px;
			height: 32px;
			padding-right: 2px;
			padding-left: 2px;
			padding-top: 2px;
			padding-bottom: 2px;
		}
	</style>
</head>
<body style="background-image: url(<?php echo $th; ?>); background-size: contain;	background-size: cover; background-attachment: fixed;">
<form action='theme1.php' method='POST' enctype='multipart/form-data'>
	<input type='text' name='name'><br><input type='file' name='file'><br>
	<input type='submit' name='submit'>
	</form>


</body>
</html>