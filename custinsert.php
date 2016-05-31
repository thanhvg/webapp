<?php
include("functions.php");
function validate() {
  //check data
  return true;
}
if (isset($_POST["CustFirstName"])) {
    print("data recieved");
    // print_r($_POST);
    // print_r(isset($_POST["CustFirstName"]));
    if (validate()) {
      addCustomer($_POST);
    }
    else {
      header("Location: customer-entry.php");
    }

} else {
  print("no data");
}
 ?>
