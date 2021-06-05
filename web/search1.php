<?php
	
	include 'conn.php';
	if (isset($_POST['submit']) {
	$nm=$_POST['uname'];
	//echo "$id";
	session_start();
	$id=$_SESSION['uid'];
	$ans=mysqli_query($conn,"select *from reg_user where username='$nm'");
	$n=mysqli_num_rows($ans);
	echo $n;
	if ($n!=0) {
		
	for ($i=0; $i <$n ; $i++) { 
		$row=mysqli_fetch_array($ans);
		$id2=$row[0];
		$a=$row[2];
		$b=$row[8];
	}
	$ans1=mysqli_query($conn,"select *from reg_user where uid='$id'");
	$n=mysqli_num_rows($ans1);
	for($i=0;$i<$n;$i++)
	{
		$row=mysqli_fetch_array($ans1);
		$c=$row[2];
	}
	echo "<img src='$b' height='100' width='100' style='border-radius: 50%;'>";
	echo "$a";
	echo "<a href='req.php ?id=$id&a=$a&c=$c'><img src='app.png'></a>";
}
else
{
	echo "<script>alert('username is not found')</script>";
}}

?>