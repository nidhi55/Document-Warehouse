
<?php
	if (isset($_POST['submit'])) {
	
	$um=$_POST['Name'];
	$mail=$_POST['Email'];
	$sub=$_POST['msg'];
	$sql="INSERT INTO feedback (uid,username, email,msg) VALUES ('0001','$um','$mail','$sub')";
	$result1=mysqli_query($conn,$sql);
	if ($result1) {
		header('location:index.html?succesfully');
	}
	else{
		header('location:index.html?notsucceful');
	}
}
?>