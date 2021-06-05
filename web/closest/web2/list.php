<?php

include('conn.php');
session_start();
$id=$_SESSION['uid'];

?>
<!DOCTYPE html>
<html>
	<title>list</title>
	<link rel="stylesheet" type="text/css" href="lis.css">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
	<link rel="stylesheet" type="text/css" href="log_style.css">
   <link rel="stylesheet" href="log_style.css" media="screen" type="text/css" />
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> 
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'document')" id="defaultOpen"><i class="fa fa-desktop" style="font-size: 20px;"></i> My  Document</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-upload" style="font-size: 20px;"></i>  Upload</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-download" style="font-size: 20px;"></i>  Download</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-send-o" style="font-size: 20px;"></i>  Share</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-trash-o" style="font-size: 20px;"></i>  Delete</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="document" class="tabcontent">
  <h3>Your Files</h3>
  <p>
  	<?php

  	$sql='select * from ao$id';
  	$res=mysqli_query($conn,$sql);
  	$n=mysqli_num_rows($res);
  	for ($i=0; $i <$n ; $i++) { 
  		$row=mysql_fetch_array($res);
  		echo "";
  	}
  	?>
  </p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
	<!--<table>
		<tr><td><input type="image" src="d.png"></td><td><a href="my_drive.html" target="frame3">My Drive</a></td></tr>
		<tr><td><input type="image" src="co.png"></td><td><a href="computer.html" target="frame3">Computers</a></td></tr>
		<tr><td><input type="image" src="sared.png"></td><td><a href="shared.html" target="frame3">Shared with me</a></td></tr>
		<tr><td><input type="image" src="clock.png"></td><td><a href="clock.html" target="frame3">Recent</a></td></tr>
		<tr><td><input type="image" src="sha.png"></td><td><a href="starred.html" target="frame3">Starred</a></td></tr>
		<tr><td><input type="image" src="trad.png"></td><td><a href="trash.html" target="frame3">Trash</a></td></tr>
		<tr><td><hr></td></tr>
		<tr><td><input type="image" src="backup.png"></td><td><a href="backup.html" target="frame3">Backups</a></td></tr>-->
</body>
</html>