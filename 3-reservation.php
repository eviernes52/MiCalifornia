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

  <title>Mi California - Mexican Bar and Grill | Reservations</title>
  <link href="main.css" rel="stylesheet">
  </script>
</head>

<body>
  <?php
  if (isset($_POST["date"])) {
    require "2-reserve.php";
    if ($_RSV->save(
      $_POST["date"],
      $_POST["slot"],
      $_POST["name"],
      $_POST["email"],
      $_POST["tel"],
      $_POST["notes"]
    )) {
      echo "<div class='ok'>Your Reservation has been placed sucessfully.</div>";
    } else {
      echo "<div class='err'>" . $_RSV->error . "</div>";
    }
  }
  ?>

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


    <div class="reserve-h1">
      <h1>Reserve A Table</h1>
    </div>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Name</label>
      <input type="text" required name="name" placeholder="Name" />

      <label for="res_email">Email</label>
      <input type="email" required name="email" placeholder="john@smith.com" />

      <label for="res_tel">Phone Number</label>
      <input type="text" required name="tel" placeholder="123456789" />

      <label for="res_notes">Party number and requests</label>
      <input type="text" name="notes" placeholder="Party of 6 two child seats and away from bar" />

      <?php

      $mindate = date("Y-m-d");
      ?>
      <label>Reservation Date</label>
      <input type="date" required id="res_date" name="date" min="<?= $mindate ?>">

      <label>Reservation Slot</label>
      <select name="slot">
        <option value="AM">10-11AM</option>
        <option value="AM">11-12AM</option>
        <option value="PM">1-2PM</option>
        <option value="PM">2-3PM</option>
        <option value="PM">3-4PM</option>
        <option value="PM">4-5PM</option>
        <option value="PM">5-6PM</option>
        <option value="PM">6-7PM</option>
        <option value="PM">7-8PM</option>
      </select>

      <input type="submit" value="Submit" />
    </form>
</body>

<div class="contact-footer">
  <br>
  <p>&copy; Copyright 2022 Mi California Restaurant Inc </p>
</div>

</html>