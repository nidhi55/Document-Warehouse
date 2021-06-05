<?php
	session_start();

	include 'connect.php';
	if (isset($_GET['path'])) {
		
	
		$path=$_GET['dow'];
		$path1="images/resume".$path;
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($path1).'"');
		header('Content-Length:'.filesize($path1));
		readfile($path1);
	}

?>