<?php
	include 'conn.php';
	if (isset($_POST['login'])) {
	
		$unm=$_POST['unm'];
		$pwd=$_POST['pass'];
			$res=mysqli_query($conn,"select * from reg_user where username='$unm' and pwd='$pwd'");
			$n=mysqli_num_rows($res);
			for ($i=0; $i <$n ; $i++) { 
				$row=mysqli_fetch_array($res);
				$a=$row[0];
			}
			if($n>0)
			{
				session_start();
				$_SESSION['unm']=$unm;
				$_SESSION['pwd']=$pwd;
				$_SESSION['uid']=$a;
				header("location:closest/index.php");

			}
			else{
				echo "<script>alert('your password or username is incorect')</script>";
			}
		}
		else
		{
			echo "<script>alert('first login website!')</script>";
		}

?>