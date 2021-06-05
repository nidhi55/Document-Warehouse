<?php
include 'conn.php';
session_start();
$id=$_SESSION['uid'];
if(isset($_POST['submit'])) 
{
	$Name=$_POST['name'];
	$file=$_FILES['file'];

	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fileExt=explode('.',$fileName);
	$fileActualExt= strtolower(end($fileExt));

	$allowed = array('jpg' ,'jpeg','png','pdf','mp4','mp3','zip','ppt','docx','txt');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError===0) {
			if ($fileSize<100000000) {
				$fileNameNew=$Name.".".$fileActualExt;
				$fileDestination="upload/".$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				$sql="insert into a0$id (fname,type,size,path) values('$Name','$fileActualExt','$fileSize','$fileDestination')";
				$res=mysqli_query($conn,$sql);
				if($res){
					header("Location:index.php?uploadsuccess");
				}
			}else{
				echo "your file is too big!";
			}
		}else{
			echo "There was an error uploading your file!";
		}
	}
	else {
		echo "you can not upload file of this type!";
	}
}

?>