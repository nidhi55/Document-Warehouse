<?php
include 'conn.php';
session_start();
$id=$_SESSION['uid'];
if(isset($_POST['submit57'])) 
{		$Name=$_POST['name'];
	$file=$_FILES['file'];

	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fileExt=explode('.',$fileName);
	$fileActualExt= strtolower(end($fileExt));

	$allowed = array('jpg' ,'jpeg','png','pdf');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError===0) {
			if ($fileSize<1000000) {
				$fileNameNew=$Name.".".$fileActualExt;
				$fileDestination="theme/".$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
	$sql="UPDATE reg_user SET theme='$fileDestination' WHERE uid='$id'";
	$update=mysqli_query($conn,$sql);
}
}
}
}
header("location:index.php");
?>