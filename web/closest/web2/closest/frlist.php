<?php

	include 'conn.php';
	session_start();
	$id=$_SESSION['uid'];
	if (isset($_GET['share'])) {
	$share=$_GET['share'];
	$a=$_GET['a'];
	$b=$_GET['b'];
	$c=$_GET['c'];
}
	$ans9=mysqli_query($conn,"select *from reg_user where uid='$id'");
	$n9=mysqli_num_rows($ans9);
	echo "<table>";
	for ($i=0; $i <$n9 ; $i++) { 
		$row=mysqli_fetch_array($ans9);
		$q=$row[2];
	}

	$ans8=mysqli_query($conn,"select * from fr_list where uname='$q'");
	$n8=mysqli_num_rows($ans8);
	for ($i=0; $i <$n8; $i++) { 
		$row=mysqli_fetch_array($ans8);
		$f=$row[1];
				$ans1=mysqli_query($conn,"select * from reg_user where username='$f'");
					$n=mysqli_num_rows($ans1);
					for($i1=0;$i1<$n;$i1++)
					{
						$row=mysqli_fetch_array($ans1);
						
					
	echo "<b><table>";
	echo "<tr><td><img src='$row[8]' height='100' width='100' style='border-radius: 50%;'></td>";
	echo "<td>$f</td><td width='100'></td>
	<td><a href='share.php?share=$share&a=$a&b=$b&c=$c&f=$f'><img src='image/send.jpg' height='60' width='130'></a></td>
	</table></b>";
	
}
}
$ans12=mysqli_query($conn,"select * from fr_list where fname='$q'");
				$n12=mysqli_num_rows($ans12);
				for ($i12=0; $i12<$n12; $i12++) { 
					$row12=mysqli_fetch_array($ans12);
					$w=$row12[0];
							$ans14=mysqli_query($conn,"select * from reg_user where username='$w'");
								$n14=mysqli_num_rows($ans14);
								for($i14=0;$i14<$n14;$i14++)
								{
									$row14=mysqli_fetch_array($ans14);
										echo "<b><table>";
	echo "<tr><td><img src='$row14[8]' height='100' width='100' style='border-radius: 50%;'></td>";
	echo "<td>$w</td><td width='100'></td>
	<td><a href='share.php?share=$share&a=$a&b=$b&c=$c&f=$w'><img src='image/send.jpg' height='60' width='130'></a></td>
	</table></b>";

}
}
?>