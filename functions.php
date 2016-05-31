<?php
   function greeting()
   {
      $hour = date("G");
	  if (($hour>=0) && ($hour<12))
	  {
	     return "Good Morning";
	  }
	  elseif ($hour < 18)
	  {
	     return "Good Afternoon";
	  }
	  else
	  {
	     return "Good Evening";
	  }
   }

   function connectDb() {
     $conn = mysqli_connect("localhost", "thanh", "okay", "travelexperts");
     if(mysqli_connect_errno()) {
       print(mysqli_connect_errno());
       exit();
     }
     return $conn;
   }


   function addCustomer($customer) {
     $values = array_values($customer);
     //$values = array_slice($values, 1);
     $myconn = connectDb();
     print_r($values);
     $sql = "INSERT INTO `travelexperts`.`customers` (`CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
     $stmt = mysqli_prepare($myconn, $sql);
     mysqli_stmt_bind_param($stmt, "ssssssssssi", $values[0], $values[1],$values[2], $values[3], $values[4], $values[5], $values[6], $values[7],$values[8], $values[9], $values[10]);


     $result = mysqli_stmt_execute($stmt);

     if ($result) {
       print ("customer data inseted");
     } else {
       print ("instert failed");
     }
     mysqli_close($myconn) ;

   }
?>
