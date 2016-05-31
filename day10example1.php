<!DOCTYPE html>

<html>
   <head>
      <title>Example 1</title>
   </head>
   <body>


<?php
   $conn = mysqli_connect("localhost", "harv", "password", "travelexperts");
   
   if (!$conn)
   {
      print("Connection Error: " . mysqli_connect_error());
	  exit;
   }
   print("Connected");
   $sql = "SELECT agtfirstname, agtlastname FROM agents WHERE agencyid=1 and agtposition='Senior Agent'";
   $result = mysqli_query($conn, $sql);
   if ($result)
   {
      print("<table>");
	  while ($row = mysqli_fetch_row($result))
	  {
	     //print_r($row);
		 print("<tr>");
		 foreach ($row as $col)
		 {
		    print("<td>$col</td>");
		 }
		 print("</tr>");
	  }
      print("</table>");
   }
   
   mysqli_close($conn);
?>

      
   </body>

</html>
