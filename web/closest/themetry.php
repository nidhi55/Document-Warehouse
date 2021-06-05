<?php
session_start();
if (isset($_SESSION['uid'])) {
$id=$_SESSION['uid'];

include 'conn.php';
$res=mysqli_query($conn,"select * from reg_user where uid='$id'");
$n=mysqli_num_rows($res);
for ($i=0; $i <$n ; $i++) { 
	$row=mysqli_fetch_array($res);
	$th=$row[9];
}
?>
