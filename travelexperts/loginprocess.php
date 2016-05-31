<?php
/** File creator: Gia Thanh Vuong
 *  manage login
 */

include_once("Connection.class");
include_once("CustomerStatus.class");
$email = $_POST['email'];
$pass = $_POST['password'];
$CustomerStatus = new CustomerStatus();
if ($CustomerStatus->authenticate($email,$pass)) {
  echo "<script type='text/javascript'>alert('Logged in successfully!')</script>";

} else {
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
//echo md5($pass);
echo "<script>setTimeout(\"location.href ='index.php';\",1);</script>";
 ?>
