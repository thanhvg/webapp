<?php
print_r($_REQUEST);
print($_REQUEST['userid']);
$user = "thanh";
$pass = "okay";
if (isset($_REQUEST['userid'])) {
  if ($_REQUEST['userid'] == $user && $_REQUEST['password'] == $pass) {
    print("Login was successful");
    header("Location: http://google.com");
  } else {
    print("User id or password incorrect");
    header("Location: day11example.php");
  }
}
 ?>
