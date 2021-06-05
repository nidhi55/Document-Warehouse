<?php
	include 'conn.php';
	session_start();
	$id=$_SESSION['uid'];
	
	$a=$_GET['a'];
	$c=$_GET['c'];
	$ans8=mysqli_query($conn,"select * from friend where send='$c' and receive='$a'");
	$n8=mysqli_num_rows($ans8);
	if ($n8) {
		header("location:index.php");
	}
	else{
	$insert=mysqli_query($conn,"insert into friend(send,receive) values('$c','$a')");

	header("location:index.php");
}
?>