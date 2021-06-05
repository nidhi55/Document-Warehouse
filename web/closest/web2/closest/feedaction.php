<?php
include 'conn.php';
session_start();
if (isset($_SESSION['uid'])) {
	$id=$_SESSION['uid'];
	$um=$_POST['uname'];
	$mail=$_POST['mail'];
	$sub=$_POST['subject'];
	$sql="INSERT INTO feedback (uid,username, email,msg) VALUES ('$id','$um','$mail','$sub')";
	$result1=mysqli_query($conn,$sql);
	if ($result1) {
		header('location:index.php?your feedback is send');
	}
	else{
		header('location:index.php?your feedback is not send');
	}
}else{
		echo "<script>alert('plz first log in')</script>";

}

?>