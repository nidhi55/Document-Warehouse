<?php

include 'conn.php';
session_start();
$id=$_SESSION['uid'];

$a=$_GET['send'];
$b=$_GET['rec'];
$sql="select * from friend where send='$a' and receive='$b'";
$res=mysqli_query($conn,$sql);
$n=mysqli_num_rows($res);
for ($i=0; $i < $n; $i++) { 
	$row=mysqli_fetch_array($res);
	$c=$row[0];
		$sql2="delete from friend where fr_id='$c'";
		$res2=mysqli_query($conn,$sql2);
		header("location:services3.php");
	}



?>