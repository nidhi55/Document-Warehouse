<html>
<head>
	<link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body style="background-image: url('simple.jpg');background-attachment: fixed;">
	<div class="loginbox">
		<h2>Registation Form</h2>
		<form method="POST">
			<p>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="name" placeholder="Enter your name"></p>
			<p>UserName:&nbsp
			<input type="text" name="uname" placeholder="Enter Username"></p>
			<p>Email-id:&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="email" placeholder="Enter Email-id"></p>
			<p>Contact_No:
			<input type="tel" name="c_no" placeholder="Enter Contact_No"></p>
			<p>Birth date:&nbsp&nbsp&nbsp&nbsp
			<input type="date" name="bdate"></p>	
			<p>Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="r1">Male
			<input type="radio" name="r1">Female</p>
			<p>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="Password" name="pwd" placeholder="Enter password"></p>
			<p>Conform Password:&nbsp
			<input type="Password" name="Pwd1" placeholder="Enter password"></p>
			<center><input type="Submit" name="login" value="Login" formaction="reg_create.php" formmethod="POST">
			</center></div></form>
	
</body>
</html>