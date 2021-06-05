<?php
  
    session_start();
   include 'conn.php';
   
    //if (isset($_SESSION['aid'])) {
         $id=$_SESSION['aid'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
								<h3>News Feed</h3>
							</div>
							
									<?php
									$res=mysqli_query($conn,"select *from feedback");
									$n=mysqli_num_rows($res);
									for ($i=0; $i <$n ; $i++) { 
										$row=mysqli_fetch_array($res);
										$a=$row[0];
										$b=$row[1];
										$c=$row[3];

									?>
									<div class="media stream">
										<?php
										$res1=mysqli_query($conn,"select *from reg_user where uid='$a'");
									$n1=mysqli_num_rows($res1);
									for ($i1=0; $i1<$n1 ; $i1++) { 
										$row1=mysqli_fetch_array($res1);
										$a1=$row1[8];
										$b1="c:/xampp/htdocs/web/closest/".$a1."";
										
										?>
										<!--<a href="#" class="media-avatar medium pull-left">
											<?php //echo "<img src=".$b1.">";?>
										</a>-->
										<?php
									}
										?>
										<div class="media-body">
											<div class="stream-headline">
												<h5>
													<?php echo $b ; ?>
													
												</h5>
												<h5>
													<?php echo $c; ?>
												
                                                </div>
												
											</div><!--/.stream-headline-->

											<!--<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>-->	
										</div>
										<?php
									}
									?>
									</div><!--/.media .stream-->
									


									<div class="media stream load-more">
										<!--<a href="#">
											<i class="icon-refresh shaded"></i>
											show more...
										</a>-->
									</div>
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Admin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<?php
//}
//else
//{
  //  echo "<script>alert('login the web')</script>";
//}
?>