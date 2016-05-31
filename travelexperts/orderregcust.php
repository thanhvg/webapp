<?php
/** File creator: Gia Thanh Vuong
 *  template: Sarah
 *  order management for regestered customer
 */

if (!isset($_GET['PackageId']))
header("Location: index.php");
?>
<?php include_once("logincheck.inc.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Customer Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <style media="screen">
  .error {
    font-size: xx-small;
    color: green;
  }
  input, select {
    width: 200px;
    height: 25px;
    //padding: 1px,0px;
  }

  /*Grid start*/
  /*.row {
  margin-top: 0px;
  margin-bottom: 0px;
  }*/
  .row::after {
    content: "";
    clear: both;
    display: block;
  }
  [class*="col-"] {
    float: left;
    padding: 5px;
    //  border: 1px solid red;
  }
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}

  /*Grid end*/

  .labelForm {
    display: block;
    width: 100%;
    text-align: right;
  }

  </style>


  <script type="text/javascript">
  $(document).ready(function(){
    $('#userForm').keyup(function() {
      validateForm();
    });

    $('#submit').click(function(event){
      if (validateForm() == 0)
      $('#userForm').submit();
      else {
        alert("Please correct. Your form is not complete yet");
        event.preventDefault();
      }
    });
    $('#login').click(function(){
      $('#myModal').modal('show');
    });

  });
  function validateForm() {
    // return 0;
    var flag = 0; //error code if other than 0
    var nameReg = /^[A-Za-z]+$/;
    //var numberReg =  /^[0-9]+$/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    var names = $('#nameInput').val();
    var company = $('#companyInput').val();
    var email = $('#emailInput').val();
    var telephone = $('#telInput').val();
    var message = $('#messageInput').val();
    var firstName = $('#inputFirstName').val();
    var lastName = $('#inputLastName').val();
    var street = $('#inputStreet').val();
    var city = $('#inputCity').val();
    var province = $('#inputProvince').val();
    var country = $('#inputCountry').val();
    var postalCode = $('#inputPostalCode').val();
    var email = $('#inputEmail').val();
    var tripTypeId = $('#inputTripTypeId').val();
    var travelerCount = $('#inputTravelerCount').val();
    var ccName = $('#inputCCName').val();
    var ccNumber = $('#inputCCNumber').val();

    $('.error').hide();

    var values = new Array(firstName,          lastName,                 street,        city,          province,         country,           postalCode,           email,             tripTypeId,              travelerCount,                ccName,              ccNumber);
    var fieds = new Array ('#inputFirstName', '#inputLastName',  '#inputStreet',      '#inputCity',   '#inputProvince',  '#inputCountry',    '#inputPostalCode',             '#inputEmail',     '#inputTripTypeId' ,    '#inputTravelerCount',         '#inputCCName',      '#inputCCNumber');
    var msgs = new Array ('first name',         'last name',      'street address',     'city',       'province',         'country',           'postal code' ,        'email',          'type of trip',           'number of travellers',       'credit card type',    'credit card number'   );

    for (i = 0; i < values.length; i++) {
      if (values[i] == "") {
        $(fieds[i]).after('<span class="error"> Please enter your ' + msgs[i] + '</span>');
        flag = 1;
      }
    }
    if(!emailReg.test(email)) {
      $('#inputEmail').after('<span class="error"> Please enter a valid email address');
      flag = 2;
    }
    return flag;
  }
  function check() {
    if (validateForm() != 0) {

      alert("Please correct. Your form is not complete yet");
      return false;

    }
    return true;

  }
  </script>
  <link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <nav class = "navbar-inverse nav navbar-fixed-top">
    <div class = "container- fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Travel Experts</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="packages.php">Vacation Packages</a></li>
          <li><a href="registration.php">Register</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contact.php">Contact<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="contact.php?city=Calgary">Calgary</a></li>
              <li><a href="contact.php?city=Okotoks">Okotoks</a></li>
            </ul>
          </li>
          <!-- <li><a href="aboutus.php">About Us</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (!$isLogged) {?>
            <li><a id="login" href="#destination"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php } else { ?>
            <li><a id="login" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
          <?php } ?>

        </ul>

        <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>

        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>Please Complete this Form to Book your Package</h1>
      <p>Join us now to start your adventure!</p>
    </div>
  </div>

  <div class="container bg-grey" class="center">
    <form action="orderprocess.php" id="userForm" method="post">

      <input type="hidden" name="packageId" value="<?php echo $_GET['PackageId']; ?>">
      <div class="row">
        <div class="col-5">
          <label class="labelForm">Number of Travellers</label>
        </div>
        <div class="col-7">
          <input name="travelerCount" type="number" id="inputTravelerCount">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Trip type</label>
        </div>
        <div class="col-7">
          <select name="tripTypeId" id="inputTripTypeId">
            <option> </option>
            <option value="B"> Business </option>
            <option value="G"> Group </option>
            <option value="L"> Leisure </option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Credit card type</label>
        </div>
        <div class="col-7">
          <select name="ccName" id="inputCCName">
            <option> </option>
            <option value="AMEX"> American Express </option>
            <option value="MC"> Master Card </option>
            <option value="Diners"> Dinner </option>
            <option value="VS"> Visa </option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Credit card number</label>
        </div>
        <div class="col-7">
          <input name="ccNumber" type="number" id="inputCCNumber">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Expiry date</label>
        </div>
        <div class="col-7">
          <input name="ccExpiry" type="date" id="inputccExpiry">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <button type="reset" value="Reset" style="display:block; float:right;" class="btn btn-default" onclick="window.location.href = 'packages.php';"> Back </button>
        </div>
        <div class="col-7">
          <button id="submit" class="btn btn-default" > OK </button>
        </div>
      </div>
    </form>
  </div>

  <footer class="container-fluid text-center">
    <p>The Travel Experts &copy; 2016<br>
      <ul class="list-inline">
        <li><a href="http://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="http://www.twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="https://plus.google.com/" class="icoGoogle" title="Google +"><i class="fa fa-google-plus fa-2x"></i></a></li>
        <li><a href="https://www.linkedin.com/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin fa-2x"></i></a></li>
      </ul>
    </footer>
  </body>
  </html>
