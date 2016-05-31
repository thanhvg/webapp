<?php
/* File creator: Gerardo Mondragon
   We didn't end up using this version of the registration form but included it to show the work done. */
$title = "Travel Experts";
include("header.php");
include("navbar.php");
?>

    <div class="jumbotron">
  		<div class="container text-center">
    		<h1>Customer Registration</h1>
        <p>Join us now to start your adventure!</p>
  		</div>
		</div>

    <div class="container" class="center">
      <h2 class="text-center">Registration Form</h2>
      <div class="row">
        <div class="col-sm-12">
          <div>
        		<form id="registration" action="bouncer.php" method="post">

        			<div>
        				<h4 align="justify">Thank you for considering us to be your travel agency. Please first complete the<b> Customer Registration Form </b>below. The Customer data is kept stricly confidential. Only fully completed forms are accepted.</h4>


        				<label for="salutation">Salutation</label><br>
        				<select id="salutation" name="salutation" title="Salutation" align="left" size="1">
        					<option value="">Select...</option>
        					<option value="mr">Mr.</option>
        					<option value="mrs">Mrs.</option>
        					<option value="ms">Miss</option>
        					<option value="ms">Dr.</option>
        					<option value="ms">Ms.</option>
        				</select><br /><br />

        				<label for="fname">First Name</label><br>
        				<input id="fname" name="fname" type="text" value="" placeholder="First Name" size="100" required></input><br><br>

        				<label for="lname">Last Name</label><br>
        				<input id="lname" name="lname" type="text" value="" placeholder="Last Name Name" size="100" required></input><br /><br />

        				<label for="bday">Date of Birth</label><br>
        				<form id="bday" action="action_page.php"> <!--LOOK FOR THE PHP FILE-->
        					<input name="bday" type="date" required></input>
        				</form><br><br>

        				<label for="gender">Gender</label>
        				<form id="gender">
        					<input type="radio" name="gender" value="male">Male</input>
        					<input type="radio" name="gender" value="female">Female</input>
        					<input type="radio" name="gender" value="other">Other</input>
        				</form><br>

        				<label for="email">Email</label><br>
        				<input id="email" name="name" type="text" value="" placeholder="username@domaimname.com" size="35" required></input><br><br>

        				<label for="username">Username</label><br>
        				<input id="username" name="username" type="text" value="" placeholder="minimum of 6 alphanumeric characters" title="Create a username. Must contain at least 6 or more alphanumeric characters" size="35" required></input><br><br>

        				<label for="password">Password</label><br>
        				<input id="Password" name="Password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" placeholder="mouse over for password requirements"
        							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" size="35" required></input><br><br>

        				<label for="PasswordConf">Password Confirmation</label><br>
        				<input id="PasswordConf" name="PasswordConf" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" placeholder="confirm password"
        							title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" size="35" required></input><br><br>

        				<label for="address1">Address Line 1</label><br>
        				<input  id="address1" name="address1" type="text" title="Address Line 1" size="100" required></input><br><br>

        				<label for="address2">Address Line 2</label><br>
        				<input id="address2" name="address2" type="text" title="Street Address Line 2" size="100"></input><br><br>

        				<label for="provcity">Province/City</label><br>
        					<select class="wrapper" name="parent_selection" id="parent_selection">
        						<option value="PleaseSelect">-- Please Select --</option>
        						<option value="Alberta">Alberta</option>
        						<option value="BritishColumbia">British Columbia</option>
        						<option value="Manitoba">Manitoba</option>
        						<option value="NewBrunswick">New Brunswick</option>
        						<option value="NewfoundlandandLabrador">Newfoundland and Labrador</option>
        						<option value="NorthwestTerritories">Northwest Territories</option>
        						<option value="NovaScotia">Nova Scotia</option>
        						<option value="Nunavut">Nunavut</option>
        						<option value="Ontario">Ontario</option>
        						<option value="PrinceEdwardIsland">Prince Edward Island</option>
        						<option value="Quebec">Quebec</option>
        						<option value="Saskatchewan">Saskatchewan</option>
        						<option value="Yukon">Yukon</option>
        					</select>
        				<select name="child_selection" id="child_selection"></select><br><br>

        				<label for="postcode">Postal Code</label><br>
        				<input id="postcode" name="postcode" type="text" value="" placeholder="type in this format: K1A 8B1" size="25" required></input><br><br>

        				<label for="country">Country</label><br>
        				<select id="country" name="country">
        					<option value="">Select One</option>
        					<option value="CAN">Canada</option>
        				</select><br><br>

        				<label for="hphone">Home Phone</label><br>
        				<input id="hphone" name="hphone" type="number" value="" placeholder="(333) 444-5555" required autocomplete="tel" size="25"></input><br><br>

        				<label for="ophone">Office Phone</label><br>
        				<input id="ophone" name="objectphone" type="number" value="" placeholder="(333) 444-5555" required autocomplete="tel" size="25"></input><br><br>

        				<label for="cellmob">Cellular / Mobile</label><br>
        				<input id="cellmob" name="cellmob" type="number" value="" placeholder="(333) 444-5555" required autocomplete="tel" size="25"></input><br><br>

        				<p>Any other information you think we should know about?</p>

        				<textarea id="comment" class="form-control" rows="3" cols="100"></textarea>

        				<!--<input type="text" size="130" id="infoextra" name="infoextra" title="Let us know more about you!"></input>-->

        				<p>Would you like to receive promotional material from us in your email?</p>
        				<form id="promoemail">
        					<input type="radio" name="promo" value="yes">Yes</input>
        					<input type="radio" name="promo" value="no">No</input>
        					<input type="radio" name="promo" value="ask me later">Ask me later!</input>
        				</form>

        				<p id="cprivacy">Please read our Client Privacy and Content Form before submitting this form. Submitting this client registration form indicates that you have read and agree to the terms and condition of privacy and other conditions set out.</p>

        				<p>I declare that the information submitted is true and correct.</p>
        				<label for="initials">Please print initials to confirm</label>
        				<input id="initials" name="initials" type="text" size="5" required></input><br /><br />

        			</div>

        				<input style="margin-left:380px" id="submit" type="submit" value="Submit Form"></input>
        				<input id="reset" type="button" value="Reset Form" onclick="this.form.reset()"></input>

        				<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();">
        				<input type="button" name="clear" value="Clear Form" onclick="clearForm(this.form);">

        		</form>
        	</div>
      </div>
    </div>
  </div>

<?php include("footer.php");  ?>
