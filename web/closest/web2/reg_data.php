<?php
$conn=mysqli_connect('localhost',"root","","pr");
$tab="create table if not exists reg_user(
	uid int(255) primary key auto_increment,
	name varchar(256) not null,
	username varchar(256) not null,
	email varchar(256) not null,
	con_no int(10) not null,
	dob date,
	gender varchar(10) not null,
	pwd varchar(256) not null,
	pro_pic varchar(255) ,
	theme varchar(255))";
$result=mysqli_query($conn,$tab);
if (isset($_POST['submit'])) {
	$nm=$_POST['name'];
	$um=$_POST['uname'];
	$mail=$_POST['email'];
	$gender=$_POST['r1'];
	$dob=$_POST['bdate'];
	$co_no=$_POST['c_no'];
	$pwd=$_POST['pwd'];
	$pwd1=$_POST['repwd'];
	if ($pwd==$pwd1) {
		
	$sql="INSERT INTO reg_user (name, username, email, con_no, dob, gender, pwd, pro_pic,theme) VALUES ('$nm','$um','$mail','$co_no','$dob','$gender','$pwd','upload/default.jpg','white')";
	$result1=mysqli_query($conn,$sql);
	if ($result1) {
			$res=mysqli_query($conn,"select * from reg_user where username='$um' and pwd='$pwd'");
			$n=mysqli_num_rows($res);

			for ($i=0; $i <$n ; $i++) { 
				$row=mysqli_fetch_array($res);
				$a=$row[0];
			}
			$query=mysqli_query($conn,"create table if not exists a0$a
										(fno int(255) primary key auto_increment,
										fname varchar(256) not null,
										size varchar(256) not null,
										type varchar(256) not null,
										path varchar(256) not null)");
			session_start();
			$_SESSION['unm']=$um;
			//$_SESSION['pwd']=$pwd;
			$_SESSION['uid']=$a;
			header("location:closest/index.php");
			
	}
	else{
		echo "<script>alert('please ,fill again!')</script>";
		//header("location:index.html");
	}
}
	else{
			echo"<script>alert('password is not match!')</script>";
			
	}
}
?>