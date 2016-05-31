

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="jquery-2.2.3.min.js"> </script>
  <script src="script.js"> </script>
  <title>Travel Experts</title>
</head>
<body>
  <?php
  $link = mysqli_connect("localhost", "thanh", "okay", "travelexperts");

  if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  echo "Success: A proper connection to MySQL was made! The travelexperts database is great." . PHP_EOL;
  echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

  $sql="SELECT * FROM agents";
  $result = mysqli_query($link, $sql);
  if ($result) {
    print("<table style ='border:2px solid black; color:red;'>");
    while ($row = mysqli_fetch_row($result)) {
      print("<tr>");
      foreach ($row as $col) {
        print("<td> $col   </td>");
      }
      print("</tr>");
    }
    print("</table>");

  }
  mysqli_close($link);
  ?>
</body>
</html>
