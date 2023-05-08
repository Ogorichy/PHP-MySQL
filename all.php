<?php
require ("all.php");
register();
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
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div class="icon">
		<i class="fab fa-facebook"></i>
		<i class="fab fa-whatsapp"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-snapchat"></i>
	</div>
</nav>
<section id="header">
<div class="header-contents">
	<h3>SIGN UP</h3>
<form method="post">
	<input type="text" name="fname" placeholder="fullname" class="form-control">
	<input type="text" name="email" placeholder="email" class="form-control">
	<input type="password" name="pword" placeholder="password" class="form-control">
	<input type="submit" name="sub" value="Register" class="btn btn-danger">
</form>
<a href="login.php">Already Registered</a>
</section>	

</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>