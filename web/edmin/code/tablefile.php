<?php
  
    session_start();
   
   	include 'conn.php';
    if (isset($_SESSION['aid'])) {
         $id=$_SESSION['aid'];
    ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index1.php">Admin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                </a>
                                <!--<ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.php"><i class="menu-icon icon-bullhorn"></i>Feedback</a>
                                </li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                               
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="tablefile.php"><i class="menu-icon icon-bar-chart"></i>Uploaded File</a></li>
                                <li><a href="table1.php"><i class="menu-icon icon-bar-chart"></i>Delete account</a></li></ul>

                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
        
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Tables</h3>
							</div>
							<div class="module-body">
								<?php 
								echo "<strong>Uploaded Files</strong><br><h1></h1>";
								echo "<strong></strong>";
								
								$sql="select * from reg_user";
								$res=mysqli_query($conn,$sql);
								$n=mysqli_num_rows($res);
								for ($i=0; $i <$n ; $i++) { 
									$row=mysqli_fetch_array($res);
									$a=$row[0];
									$c=$row[1];					
									  
									  echo "<table class='table'>
								  <thead><br>";
								  echo $c."<br><br>
									<tr>
									

									  <th>File Name</th>
									  <th>File Size</th>
									  <th>File type</th>
									</tr>
								  </thead>
								  </tbody>
									</tr>";
									$sql1="select * from a0$a";
								$res1=mysqli_query($conn,$sql1);
								$n1=mysqli_num_rows($res1);
								for ($i1=0; $i1 <$n1; $i1++) { 
									$row1=mysqli_fetch_array($res1);
									$m=$row1[1];
									$n=$row1[2];
									$o=$row1[3];

									  echo "<td>".$m."</td>";
									  echo"<td>".$n."</td>";
									   echo"<td>".$o."</td>";
									    
									echo "</tr>";
									
									
								}
								 }
							
							?>
								</tbody></table></div></div>									<!--<tr>
									  
							</div>
						</div>/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php
}
else
{
    echo "<script>alert('login the web')</script>";
}
?>