<?php
  session_start();
  include 'conn.php';
    if (isset($_SESSION['aid'])) {
         $id=$_SESSION['aid'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
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
                                    <li><a href="profile.php">Edit Profile</a></li>
                                    
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
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="fa fa-user"></i><b></b>
                                        <p class="text-muted">
                                            <?php 
                                            include 'conn.php';
                                             $sql=mysqli_query($conn,"select * from reg_user"); 
                                             $n=mysqli_num_rows($sql);

                                             ?>
                                            Total user <?php echo $n; ?></p>

                                    </a><a href="#" class="btn-box big span4"><i class="fa fa-user-plus"></i><b></b>
                                        <p class="text-muted">
                                            New Users 5</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span12">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="activity.php" class="btn-box small span4"><i class="icon-envelope"></i><b>Feedback</b>
                                                </a><a href="tablefile.php" class="btn-box small span4"><i class="fa fa-upload"></i><b>Uploaded file</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                            
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="120%">
                                        <thead>
                                            <tr>
                                                <!--<th>
                                                    uid
                                                </th>-->
                                                <th>
                                                    name
                                                </th>
                                                <th>
                                                    Username
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    con_no
                                                </th>
                                                <th>
                                                    dob
                                                </th>
                                                <th>
                                                    Gender
                                                </th>
                                                <!--<th>
                                                    pwd
                                                </th>-->
                                                <th>
                                                    pro_pic
                                                </th>
                                                <th>
                                                    Theme
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include 'conn.php';
                                                $res=mysqli_query($conn,"select * from reg_user");
                                                $n=mysqli_num_rows($res);
                                                for($i=0;$i<$n;$i++)
                                                {
                                                    $row=mysqli_fetch_array($res);
                                                    echo "<tr>
                                                    
                                                    <td>$row[1]
                                                    <td>$row[2]
                                                    <td>$row[3]
                                                    <td>$row[4]
                                                    <td>$row[5]
                                                    <td>$row[6]
                                                    <td>$row[8]
                                                    <td>$row[9]";

                                                }
                                            ?>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
    </html>
<?php
}
else
{
    echo "<script>alert('login the web')</script>";
}
?>