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

	<script>
		function initMap() {
			//map options
			var options = {
				zoom: 17,
				center: {
					lat: 33.9037666,
					lng: -118.3528862
				}
			}

			//new map
			var map = new
			google.maps.Map(document.getElementById('map'), options);

			//add marker
			addMarker({
				coords: {
					lat: 33.9037666,
					lng: -118.3528862
				},
				content: '<h1>Mi California</h1>'
			})

			function addMarker(props) {
				var marker = new google.maps.Marker({
					position: props.coords,
					map: map,
					//icon: props.iconImage
				});

				//check for custom icon
				if (props.iconImage) {
					//set icon image
					marker.setIcon(props.iconImage);
				}

				//check content
				if (props.content) {
					var infoWindow = new google.maps.InfoWindow({
						content: props.content
					});

					marker.addListener('click', function() {
						infoWindow.open(map, marker);
					});
				}
			}

			var marker = new google.maps.Marker({
				postion: {
					lat: 33.9037666,
					lng: -118.3528862
				},
				map: map,
				title: 'Mi California',
				icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
			});
		}
	</script>

	<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7VbpKsZ2Unyvif1pLxwq9qRnRIszFiwo&callback=initMap">
	</script>

	<title>Mi California - Mexican Bar and Grill | About us</title>
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




<body>
	<div class="about-container">

		<div class="about-Header">
			<h1>About Us</h1>
			<img class="about-Img" src="image/table.jpg" alt="mission-img"></img>
		</div>

		<div class="about-Content">

			<br>
			<h2>Our Story</h2>
			<p>
				Mi California is a family owned Mexican bar and grill located in the heart of the south bay (Hawthorne, California). We are a family owned business that has been serving the South Bay community for over 30 years. We are proud to be a part of the South Bay community and we hope to provide service and employment to our well knit community.
			</p> <br>
			<h2>Our Mission</h2>
			<p>
				Our mission is to provide the best authentic and affordable Mexican food amongst the south bay.
				We are committed to providing the best service and the best mexican atmosphere around.
			</p> <br>

			<h2>Our Team</h2>
			<p>
				We are a small family owned team who are encompassed to providing the best service and the best mexican food found in the south bay.
			</p> <br>
		</div>


		<div id="map"></div>



	</div>


	<div class="footer">
		<br>
		<p>&copy; Copyright 2022 Mi California Restaurant Inc </p>
</body>


</html>