<?php
include 'conn.php';
session_start();
if (isset($_SESSION['uid'])) {
	$id=$_SESSION['uid'];
	$um=$_POST['uname'];
	$mail=$_POST['mail'];
	$sub=$_POST['subject'];
	$sql1="select * from reg_user where uid='$id'";
	$res=mysqli_query($conn,$sql1);
	 $n=mysqli_num_rows($res);
	    for ($i=0; $i <$n ; $i++) { 
           	$row=mysqli_fetch_array($res);
           	$a=$row[2];
        }
	$sql="INSERT INTO feedback (uid,username, email,msg) VALUES ('$id','$a','$mail','$sub')";
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