<?php

/** File creator: Gia Thanh Vuong
 *  proces order for guest
 */

include_once 'Connection.class';
include_once 'Customer.class';
include_once 'CreditCard.class';
include_once 'Booking.class';

if (!isset($_REQUEST['packageId']) || !isset($_REQUEST['firstName'])) {
  header("Location: index.php");
}


$conn = new Connection();
$customer = new Customer($_REQUEST['firstName'], $_REQUEST['lastName'],$_REQUEST['street'],$_REQUEST['city'],$_REQUEST['province'], $_REQUEST['postalCode'],$_REQUEST['country'],$_REQUEST['homePhone'], $_REQUEST['businessPhone'],$_REQUEST['email'],$conn);
$creditCard = new CreditCard($_REQUEST['ccName'],$_REQUEST['ccNumber'],$_REQUEST['ccExpiry'],$customer->CustomerId,$conn);
$date = date('Y-m-d');
$booking = new Booking($date,$_REQUEST['travelerCount'],$customer->CustomerId ,$_REQUEST['tripTypeId'],$_REQUEST['packageId'],$conn);
$conn->close();
?>

<?php
include("header.php");
include("navbar.php");
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Order Confirmed</h1>
  </div>
</div>

<div class="container bg-grey">
  <h2 class="text-center">Congratulations your order has been placed</h2>
  <div class="row">
    <div class="col-sm-12">
      <p>
        Please print this for your records
      </p>

      <table class="table">
        <thead>
          <tr>
            <th>Your personal info</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fisrt name</td>
            <td><?php print($customer->CustFirstName) ?></td>
          </tr>
          <tr>
            <td>Last name</td>
            <td><?php print($customer->CustLastName) ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php print($customer->CustEmail) ?></td>
          </tr>
          <thead>
            <tr>
              <th>Your payment info</th>
            </tr>
          </thead>
          <tr>
            <td>Card number</td>
            <td><?php print($creditCard->CCNumber) ?></td>
          </tr>
          <tr>
            <td>Card type</td>
            <td><?php print($creditCard->CCName )?></td>
          </tr>

          <tr>
            <td>Booking ID</td>
            <td><?php print($booking->BookingId) ?></td>
          </tr>
        </tbody>
      </table>


    </div>
  </div>
</div>


<?php
include("footer.php");
?>
