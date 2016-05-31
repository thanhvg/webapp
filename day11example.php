<?php
include("functions.php");
$title = "Day 11";
include("header.php");
 ?>

<form action="processdata.php">
  User ID: <input type="text" name="userid"/> <br />
  Password <input type="password" name="password" /> <br />
  <input type="submit" value="Log in"  />

</form>


 <?php

 include("footer.php");
  ?>
