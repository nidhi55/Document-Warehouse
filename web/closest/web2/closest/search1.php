<?php
	include 'conn.php';
	session_start();
	$id=$_SESSION['uid'];
	$ans9=mysqli_query($conn,"select *from reg_user where uid='$id'");
	$n9=mysqli_num_rows($ans9);
	for ($i=0; $i <$n9 ; $i++) { 
		$row=mysqli_fetch_array($ans9);
		$q=$row[2];
	}
	

	if (isset($_POST['submit'])) 
	{
	$nm=$_POST['uname'];
	//echo "$id";
	
	$ans8=mysqli_query($conn,"select * from fr_list where uname='$q' and fname='$nm'");
	$n8=mysqli_num_rows($ans8);
	if ($n8) {
		header("location:index.php");
	}
	else{
	if ($q==$nm) {
		header("location:index.php");
	}else{
	$ans=mysqli_query($conn,"select *from reg_user where username='$nm'");
	$n=mysqli_num_rows($ans);

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
	echo "<table>";
	echo "<tr><td><img src='$b' height='100' width='100' style='border-radius: 50%;'></td>";
	echo "<td><b>$a</b></td>";
	echo "<td><a href='req.php ?id=$id&a=$a&c=$c'><img src='image/request.jpg' height='40' width='150'></a></td>";
}
else
{
	echo "<script>alert('username is not found')</script>";
}
}
}
}

?>
