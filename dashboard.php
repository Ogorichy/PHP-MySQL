<?php
session_start();
include("dash.php");
$email = $_SESSION['email'];

if ($email == "") {
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chrisgate</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
    
    <link rel="stylesheet" type="text/css" href="css/aos.css">
</head>
	
<body>
<nav>
	<div class="brand">
		<a href="#">Ogorichy</a>
	</div>
	<div class="toggle">
		<i class="fa fa-bars"></i>
	</div>
	<div>
		<ul class="menu">
			<li><a href="index.php"><i class="fa fa-bell">Notifications</i></a></li>
			<li><a href="#about"><i class="fa fa-envelope">Messages</i></a></li>
			<li><a href="#services"><i class="fa fa-user">Profile</i></a></li>
			<li><a href="logout.php"><i class="fa fa-user">Logout</i></a></li>
		</ul>
	</div>
	<div class="icon">
		<i class="fab fa-facebook"></i>
		<i class="fab fa-whatsapp"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-snapchat"></i>
	</div>
</nav>
<section id="header" style="background:grey;">
<div class="header-contents">
	<h3>Welcome
	 <?php getUserName($email);
     ?>
 to your dashboard</h3>
	<p>Please upload a profile picture</p>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="img" placeholder="fullname" class="form-control">
	<input type="submit" name="sub" value="Upload picture" class="btn btn-danger">
</form>
<?php upload(); ?>
</section>	
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>