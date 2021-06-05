<?php
include_once 'conn.php';
session_start();
if (isset($_POST['submit'])) {
 
$id=$_SESSION['uid'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if($path=move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO ao$id(fname,size,type,path) VALUES('$final_file','$new_size','$file_type','$path')";
  mysqli_query($conn,$sql);
  if ($sql) {
    echo "insert";
  }
  else
    {
      echo "not";
    }
  ?>
  <!--<script>
  alert('successfully uploaded');
        window.location.href='=index.php?success';
        </script>
  <?php
 }
 //else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>-->
  <?php
  echo "$id";
 }
}
?>