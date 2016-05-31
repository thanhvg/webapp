<!--/** File creator: Gia Thanh Vuong
 *
 */
  -->
<?php include_once("logincheck.inc.php"); ?>
<?php  $title = "Travel Experts"; ?>
  <!DOCTYPE html>
  <html>
  	<html lang="en">
  		<title><?php print($title); ?></title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link type="text/css" rel="stylesheet" href="stylesheet.css">

      <script type="text/javascript">
        $(document).ready(function() {
          $("button.pkgExpired").attr("disabled",true);
        });
      </script>

        <style media="screen">
          p.pkgExpired {
            color: red;
          }
        </style>

  	</head>
  	<body>

  <?php include("navbar.php"); ?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Packages</h1>
    <p>Join us now to start your adventure!</p>
  </div>
</div>

<div class="container">
  <?php
  include_once('packages-test.php');

   ?>
</div><br>

<?php include("footer.php");  ?>
