<?php
include("functions.php");
$title = "Customer Entry Form";
include("header.php");
 ?>
<form method="post" action="custinsert.php">
  First name: <input type="text" name="CustFirstName" /> <br />
  Last name: <input type="text" name="CustLastName" /> <br />
  Address: <input type="text" name="CustAddress" /> <br />
  City: <input type="text" name="CustCity" /> <br />
  Province:<input type="text" name="CustProv" /> <br />
  Postal: <input type="text" name="CustPostal" /> <br />
  Country: <input type="text" name="CustCountry" /> <br />
  Home phone<input type="text" name="CustHomePhone" /> <br />
  Business phone: <input type="text" name="CustBusPhone" /> <br />
  Email <input type="text" name="CustEmail" /> <br />
  Agency <input type="text" name="AgentId" /> <br />
  <input type="submit" name="Send" />
</form>


 <?php

 // include("footer.php");
  ?>
