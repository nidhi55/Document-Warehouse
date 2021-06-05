<?php
session_start();
$id=$_SESSION["uid"];
	include 'conn.php';
	$fno=$_GET["fno"];
	$query=mysqli_query($conn,"delete from a0$id where fno=$fno");
	header("location:services2.php");
?>