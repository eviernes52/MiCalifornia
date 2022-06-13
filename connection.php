<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "micalifornia_restaurant";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

	die("failed to connect!");
}
