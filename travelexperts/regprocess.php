<?php
/** File creator: Gerardo
 *
 */
include_once("Connection.class");
include_once("CustomerPwd.class");
include_once("CustomerStatus.class");

if ( !isset($_REQUEST['firstName'])) {
  header("Location: index.php");
}

$conn = new Connection();
$customer = new CustomerPwd($_REQUEST['firstName'], $_REQUEST['lastName'],$_REQUEST['street'],$_REQUEST['city'],$_REQUEST['province'], $_REQUEST['postalCode'],$_REQUEST['country'],$_REQUEST['homePhone'], $_REQUEST['businessPhone'],$_REQUEST['email'],md5($_REQUEST['password']),$conn);
$conn->close();
 ?>

 <?php
$title = "Travel Experts";
include("header.php");
include("navbar.php");
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Registered</h1>

  </div>
</div>

<div class="container">
  <p>
    You have successfuly registered. Please click the login button to log in
  </p>
</div>

<?php
include("footer.php");
?>
