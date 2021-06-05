<?php
include 'conn.php';
session_start();
//$id=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Notification system</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <li class="nav-item dropdown">
            <a class="nav-link" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" style="font-size: 28px;"></i>
              <?php
                $sql="select * from notification where status='unread'";
                $res=mysqli_query($conn,$sql);
                $n=mysqli_num_rows($res);
              ?><span class="badge badge-light"><?php echo $n ?></span></a>
              <div class='dropdown-menu' aria-labelledby='dropdown01'>
              <?php
              for ($i=0; $i <$n ; $i++) { 
                	$row=mysqli_fetch_array($res);
                	$a=$row[0];
                	$q=$row[4];
            		 echo "
              				<a class='dropdown-item' href='view.php?id=".$a."'>"; 
                	echo $q."</a>";
                	} 
                	?></a>

</li>
</ul>
</div>

 <main role="main" class="container">

     

    </main><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 </body>
</html>