<?php

/* File creator: Sarah Ferguson */

$dbh = mysqli_connect("localhost","user","password", "travelexperts");

if (mysqli_connect_errno())
{
  echo mysqli_connect_error();
}

// add some more error testing here

if (mysqli_select_db($dbh, "travelexperts"))
{
  $agencies = mysqli_query($dbh, "SELECT * FROM agencies");
}
else {
  print("Unable to select DB");
  exit;
}

 ?>
