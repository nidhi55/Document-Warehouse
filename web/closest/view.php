<?php

include 'conn.php';
$id=$_GET['id']; 
$sql="update notification set status='read' where id='$id'";
$res=mysqli_query($conn,$sql);
header("location:index.php")
?>