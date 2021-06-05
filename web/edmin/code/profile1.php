<?php
	include 'conn.php';
	session_start();
	$id=$_SESSION['uid'];
	if(isset($_POST['submit79'])) 
{		$Name=$_POST['name'];
	$file=$_FILES['file'];

	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fileExt=explode('.',$fileName);
	$fileActualExt= strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError===0) {
			if ($fileSize<1000000) {
				$fileNameNew=$Name.".".$fileActualExt;
				$fileDestination="uploads/".$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
	$sql="UPDATE admin SET apro_pic='$fileDestination' WHERE aid='$id'";
	$update=mysqli_query($conn,$sql);
}
}
}
}
header("location:index1.php");
?>
