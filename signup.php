<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>



<!DOCTYPE html>
<html lang="en">

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

	<title>Mi California - Mexican Bar and Grill | Log in</title>
</head>

<nav>
	<ul class=nav-links>
		<li> <a href="Home.php"><img class="logo" src="image/Mi California Promo Logo.png" alt="logo-img"></img><a href="Home.php"></li>
		<li><a href="about us.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="menu.php">Menu</a></li>
		<li><a href="3-reservation.php">Reserve</a></li>
		<li><button class="reservation-button" onclick="location.href='login.php'">Login</button></li>
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
</nav>
<script src="burger.js"></script>

<body style="background: url(https://thepointsguy.global.ssl.fastly.net/uk/originals/2021/04/GettyImages-629387256.jpg); background-size: 100%;">


	<style type="text/css">
		#text {

			height: 30px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {
			padding: 10px;
			width: 100px;
			color: white;
			background-color: orange;
			border: none;
			cursor: pointer;
		}

		#button:hover {
			background-color: #ffc107;
		}

		#box {
			background-color: #f00707;
			margin-top: 30px;
			margin: 30px auto;
			width: 300px;
			padding: 30px;
			opacity: 90%;
		}
	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<div class="login-signup"><a href="login.php">Click to Login</a><br><br></div>
		</form>
	</div>
</body>

<div class="login-footer">
	<br>
	<p>&copy; Copyright 2022 Mi California Restaurant Inc </p>
</div>

</html>