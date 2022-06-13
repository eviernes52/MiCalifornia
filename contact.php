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

	<title>Mi California - Mexican Bar and Grill | Contact</title>

</head>

<body>
	<div class="container">
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


		<form class="contact-form" action="contact.php" method="post">
			<h1 class="contact-header">Contact Us</h1>
			<label for="Name" class="contact-label">Name</label>
			<input type="text" class="contact-form" id="Name" Name="Name" placeholder="Name">
			<label for="Email" class="contact-label">Email</label>
			<input type="text" class="contact-form" id="Email" Email="Email" placeholder="Email">
			<label for="Subject" class="contact-label">Subject</label>
			<input type="" subject="subject" class="contact-form" id="subject" placeholder="Subject">
			<label for="Message" class="contact-label">Message</label>
			<textarea class="contact-form" id="Message" Name="Message" placeholder="Message"></textarea>
			<a href="contact-submit.php"><button class="contact-button" onclick="location.href='contact-submit.php'">Send Mail</button></a>
		</form>


		<div class="contact-footer">
			<br>
			<p>&copy; Copyright 2022 Mi California Restaurant Inc </p>
		</div>

	</div>
</body>

</html>