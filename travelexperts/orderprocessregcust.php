<?php
/** File creator: Gia Thanh Vuong
 *  process order for registered customer
 */
include_once 'Connection.class';
//include_once 'Customer.class';
include_once 'CreditCard.class';
include_once 'Booking.class';
include_once 'logincheck.inc.php';


$conn = new Connection();
$customerID = $customerStatus->CustomerId;
$creditCard = new CreditCard($_REQUEST['ccName'],$_REQUEST['ccNumber'],$_REQUEST['ccExpiry'],$customerID,$conn);
$date = date('Y-m-d');
$booking = new Booking($date,$_REQUEST['travelerCount'],$customerID ,$_REQUEST['tripTypeId'],$_REQUEST['packageId'],$conn);
$conn->close();
?>

<?php
$title = "Travel Experts";
include("header.php");
include("navbar.php");
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Order Confirmed</h1>
  </div>
</div>

<div class="container bg-grey">
  <h2 class="text-center">Congratulation your order has been placed</h2>
  <div class="row">
    <div class="col-sm-12">
      <p>
        Please print this for your record
      </p>

      <table class="table">

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
