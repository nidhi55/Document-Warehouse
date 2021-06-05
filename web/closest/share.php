<?php
	session_start();
	include 'conn.php';
	$id=$_SESSION['uid'];
	$sql="select * from reg_user where uid='$id'";
		$res=mysqli_query($conn,$sql);
		if ($res) {
				$row=mysqli_fetch_array($res);
				$c=$row[2];
				
			}
if (isset($_GET['share'])) {
	$path=$_GET['share'];
	$fnm=$_GET['a'];
	$size=$_GET['b'];
	$type=$_GET['c'];
	$f=$_GET['f'];
?>
	
	<?php
		
		$sql="select * from reg_user where username='$f'";
		$res=mysqli_query($conn,$sql);
		if ($res) {
				$row=mysqli_fetch_array($res);
				$a=$row[0];
				$b=$row[2];
				$sql1="insert into a0$a(fname,type,size,path) values('$fnm','$size','$type','$path')";
				$res1=mysqli_query($conn,$sql1);
				if ($res1) {
					$sql2="insert into notification(uid,rname,sname,msg,status) values('$a','$b','$c','your friend $c send file','unread');";
					$res3=mysqli_query($conn,$sql2);
					
						$sql12="insert into frshare (sname,rname,fname) values('$c','$b','$fnm')";
						$res12=mysqli_query($conn,$sql12);
					
					
					header('location:services1.php?success');
					
				}
				else{
					header('location:services1.php?unsuccess');
				}		
		}
	
	else{
		header('location:services1.php?unsuccess');
	}
}
?>