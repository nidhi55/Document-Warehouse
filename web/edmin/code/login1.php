<?php
	include 'conn.php';
	if (isset($_POST['login'])) {
		$nm=$_POST['nm'];
		$pwd=$_POST['pwd'];
		
			$res=mysqli_query($conn,"select * from admin where aname='$nm' and apwd='$pwd'");
			$n=mysqli_num_rows($res);
			for ($i=0; $i <$n ; $i++) { 
				$row=mysqli_fetch_row($res);
				$id=$row[0];
			}
			if($n>0)
			{
				session_start();
				/*$_SESSION['unm']=$unm;
				$_SESSION['pwd']=$pwd;*/
				$_SESSION['aid']=$id;
				header("location:index1.php");

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