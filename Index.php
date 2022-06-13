<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />

	<link rel="apple-touch-icon" sizes="180x180" href="/favicon_package_v0.16/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon_package_v0.16/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon_package_v0.16/favicon-16x16.png">
	<link rel="manifest" href="/favicon_package_v0.16/site.webmanifest">
	<link rel="mask-icon" href="/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title>Mi California - Mexican Bar and Grill | Log Out</title>
</head>

<nav>
	<ul class=nav-links>
		<li> <a href="Home.php"><img class="logo" src="image/Mi California Promo Logo.png" alt="logo-img"></img><a href="Home.php"></li>
		<li><a href="about us.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="menu.php">Menu</a></li>
		<li><a href="3-reservation.php">Reserve</a></li>
		<button class="reservation-button" onclick="location.href='logout.php'">Logout</button>

	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
</nav>
<script src="burger.js"></script>

<body>
	<style type="text/css">
		#h1 {
			font-size: 50px;
			font-family: "Welcome";
			color: #da532c;
			text-align: center;
			margin-top: 50px;
		}
	</style>

	<div class="home-content">
		<br><br><br><br><br>
		<h3 class="h3-home">Thank you for creating an account with Mi California</h3>
		<br><br>

		<p class="p-home">Welcome to the heart of the south bay's favorite mexican cuisine, <?php echo $user_data['user_name']; ?> !
			<br><br><br>
		<h1 class="share-home">Share Your Love For Us on Social Media</h1>
		<br>
		</p>
	</div>



	<div class="home-socialshare">
		<span class="homebutton facebook"><img src="image/color/square/facebook.png" alt="facebook-img"></img></span>
		<span class="homebutton instagram"><img src="image/color/square/Instagram.png" alt="Instagram-img"></img></span>
		<span class="homebutton twitter"><img src="image/color/square/Twitter.png" alt="Twitter-img"></img></span>
	</div>

</body>
<div class="login-footer">
	<br>
	<p>&copy; Copyright 2022 Mi California Restaurant Inc </p>
</div>

</html>