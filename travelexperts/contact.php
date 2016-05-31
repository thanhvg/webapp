<!--Contact Us Version 1 - May 9, 2016
     Sarah Ferguson created initial template using a combination of the online store and marketing templates from W3 schools.
    Also created "featured vacation" container using bootstrap.

		Sarah Ferguson also created the contact functionality of the page that loads information from PHP database (got help from Harvey for error message-see notes below)-->

		<?php
		include_once("logincheck.inc.php");
		$title = "Travel Experts";
		include("header.php");
	  include("navbar.php");
		include_once("connect.php");
		 ?>

		<?php
		//declaring variables for contact list
		$agencies = mysqli_query($dbh, "SELECT * FROM agencies");
		$agents = mysqli_query($dbh, "SELECT * FROM agents");
		$row_cnt = mysqli_num_rows($agencies); // see how many agencies there are
		$div_rows = ceil($row_cnt/2); // Calculation to find # of rows given 2 agencies per row
		$num_agency = 0; //used to count agencies for display

		//HARV: the stack error happens if you call the page without using the dropdown, which results in $_GET being empty
		// to get around this, use a ternary expression to check if $_GET['city'] isset, if true, return $_GET['city'] else return "Calgary" as the default.
		$location = (isset($_GET['city'])) ? $_GET['city'] : 'Calgary';  // used with the drop down menu to make it responsive based on what city is chosen

		$xcoordinates = array("Calgary"=>"51.0486", "Okotoks"=>"50.725");
		$ycoordinates = array("Calgary"=>"-114.0708", "Okotoks"=>"-113.975");
		if ($location == "Calgary")
		{
			$agencyid = 1;
		}
		else {
			$agencyid = 2;
		}
		define("COLUMNS", 2);
		 ?>


<?php

//	function contacts($location, $agencies, $agents)
function contacts($agencyid, $agencies, $agents)
	{
		if (mysqli_num_rows($agencies) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($agencies)) {
				if ($row["AgencyId"] == $agencyid)
					{
				 global $cityprov;
				 global $phone;
				 $cityprov = $row["AgncyCity"] . ", " . $row["AgncyProv"];
				 $phone = $row["AgncyPhone"];

					echo "<address>";
					echo "<strong>" . $row["AgncyCity"] . " Agency</strong><br>";
					echo $row["AgncyAddress"] . "<br>";
					echo $row["AgncyCity"] . ", " . $row["AgncyProv"] . " " . $row["AgncyPostal"] . "<br>";
					echo "<abbr title='Phone'>P: </abbr>" . $row["AgncyPhone"] . "<br>";
					echo "<abbr title='Fax'>F: </abbr>" . $row["AgncyFax"] . "<br>";
					echo "<br>";

					// $agencyid = $row["AgencyId"];
					// echo "Agency Id: " . $agencyid . "<br>";
					// echo "<ul>";
					while($row = mysqli_fetch_assoc($agents))
					{
						if ($row["AgencyId"] == $agencyid)
						{
							// echo "<li>";
							echo $row["AgtFirstName"];
							if ($row["AgtMiddleInitial"] != "NULL")
							{ echo " " . $row["AgtMiddleInitial"]; }
							echo " " . $row["AgtLastName"] . ", " . $row["AgtPosition"] . "<br>";
							echo "<abbr title='Phone'>P: </abbr>" . $row["AgtBusPhone"] . "<br>";
							$tmp_email = $row["AgtEmail"];
							echo "<a href='mailto:$tmp_email'>" . $tmp_email . "</a>";
							// echo "</li>";
							echo "<br><br>";
						}
					}
					// echo "</ul>";
						echo "<br>";
						echo "</address>";
			}
			}
	} else {
			echo "0 results";
	}
	mysqli_data_seek($agents, 0); // sets pointer to 0 for agents so we can loop through results again for other agencies
	mysqli_data_seek($agencies, 0);

	}

?>


		<div class="jumbotron">
  		<div class="container text-center">
    		<h1>Contact Our Travel Agents</h1>
    		<p>Our experienced travel agents can assist you with any of your travel needs.</p>
  		</div>
		</div>

		<div class="container">
			<?php
			//for ($i=0; $i<COLUMNS; $i++) // display for amount of columns on page (2 is the set amount)
			//{
				echo "<div class='row'>";
				// echo "i: " . $i . " ";
				//for ($j=0; $j<=$div_rows; $j++ ) {
				// echo "j: " . $j . " ";
				//if ($num_agency < $row_cnt)
				//{
					$num_agency++; // add increment here because it started at 0
					// echo "num_agency: " . $num_agency . " ";
					echo "<div class='col-sm-6'>";
					echo "<img src='img/contactus.jpg' class='img-responsive' style='width:100%' alt='Image'>"; // Image from: https://pixabay.com/en/phone-cell-customer-service-875488/ -->
					echo "</div>";
					echo "<div class='col-sm-6'>";
					contacts($agencyid, $agencies, $agents);
					echo "</div>";
				//}}
				echo "</div>";
			//}
			echo "</div>";
			 ?>
			<!-- <div class="row"> -->
				<!-- <div class="col-sm-3"> -->
		      <!-- <img src="img/calgary_peace_bridge.jpg" class="img-responsive" style="width:100%" alt="Image"> <!--Img from http://blog.buzzbishop.com//wp-content/uploads/2014/01/IMG_6448-1024x768.jpg labeled for re-use -->
		    <!-- </div> -->
				<!-- <div class="col-sm-3"> -->
					<!-- <?php // contacts(1, $agencies, $agents); ?> -->
			<!-- </div> -->
			<!-- <div class="col-sm-3"> -->
				<!-- <img src="img/edmonton.jpg" class="img-responsive" style="width:100%" alt="Image"> <!--Img from https://pixabay.com/static/uploads/photo/2013/08/19/22/33/edmonton-174104_960_720.jpg -->
			<!-- </div> -->
			<!-- <div class="col-sm-3"> -->
				<!-- <?php // contacts(2, $agencies, $agents); ?> -->
		<!-- </div> -->
	<!-- </div> -->
</div>

<?php
 mysqli_close($dbh);
 ?>

<!--Modified from the company template on W3 bootstrap
    http://www.w3schools.com/bootstrap/bootstrap_theme_company.asp -->
<div class="container-fluid bg-grey">
  <h2 class="text-center">Contact</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span><?php echo $cityprov; ?></p>
      <p><span class="glyphicon glyphicon-phone"></span><?php echo $phone; ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:info@travelexperts.com"> info@travelexperts.com</a></p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Modified from the company template on W3 bootstrap
    http://www.w3schools.com/bootstrap/bootstrap_theme_company.asp -->
<!-- Set height and width with CSS -->
<div id="googleMap" style="height:400px;width:100%;"></div>

	<!-- Add Google Maps -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		<?php
		echo "var myCenter = new google.maps.LatLng($xcoordinates[$location], $ycoordinates[$location]);";
		 ?>

			function initialize() {
				var mapProp = {
					center:myCenter,
					zoom:12,
					scrollwheel:false,
					draggable:false,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

				var marker = new google.maps.Marker({
					position:myCenter,
				});

				marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			</script>

<?php include("footer.php");  ?>
