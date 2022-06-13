<?php
require "2-reserve.php";
$all = $_RSV->getDay();

header("Content-Type: text/csv");
header("Content-Disposition: attachment;filename=reservations.csv");
if (count($all) == 0) {
  echo "No reservations";
} else {
  foreach ($all[0] as $k => $v) {
    echo "$k,";
  }
  echo "\r\n";

  foreach ($all as $r) {
    foreach ($r as $k => $v) {
      echo "$v,";
    }
    echo "\r\n";
  }
}
