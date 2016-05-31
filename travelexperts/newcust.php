<?php
/* File creator: Gerardo Mondragon */
include_once 'Connection.class';
include_once 'Customer.class';

$conn = new Connection();
$customer = new Customer($_REQUEST['firstName'], $_REQUEST['lastName'],$_REQUEST['street'],$_REQUEST['city'],$_REQUEST['province'], $_REQUEST['postalCode'],$_REQUEST['country'],$_REQUEST['homePhone'], $_REQUEST['businessPhone'],$_REQUEST['email'],$conn);
$conn->close();

header("Location: packages.php");


 ?>
