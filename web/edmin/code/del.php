<?php

include 'conn.php';
session_start();
$id=$_SESSION['aid'];

$a=$_GET['id'];
		$sql2="delete from reg_user where uid='$a'";
		$res2=mysqli_query($conn,$sql2);
		$sql3="drop table a0$a";
		$res3=mysqli_query($conn,$sql3);
		header("location:table1.php");




?>