<?php
	session_start();
	$id=$_SESSION['uid'];
	include 'conn.php';
	$a=$_GET['a'];
	$c=$_GET['c'];
	$insert=mysqli_query($conn,"insert into friend(send,receive) values('$c','$a')");
	//header("location:closest/index.php");
?>