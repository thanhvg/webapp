<!-- File creator: Gerardo Mondragon -->
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
  <link type="text/css" rel="stylesheet" href="stylesheet.css">

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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->

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
    var password = $('#inputPassword').val();
    var passwordre = $('#inputPasswordRe').val();

    $('.error').hide();

    var values = new Array(firstName,          lastName,                 street,        city,          province,         country,            postalCode,                      email,             password         );
    var fieds = new Array ('#inputFirstName', '#inputLastName',  '#inputStreet',      '#inputCity',   '#inputProvince',  '#inputCountry',    '#inputPostalCode',             '#inputEmail',     '#inputPassword' );
    var msgs = new Array ('first name',         'last name',      'street address',     'city',       'province',         'country',           'postal code' ,               'email',          'password'        );

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

    if(password != passwordre) {
      $('#inputPasswordRe').after('<span class="error"> Passwords are not the same');
      flag = 3;
    }


    return flag;
  }

  </script>
</head>
<body>

<?php include("navbar.php"); ?>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>Please Complete this Form to Register</h1>
      <p>Join us now to start your adventure!</p>
    </div>
  </div>

  <div class="container" class="center">
    <form action="regprocess.php" id="userForm" method="post">

      <div class="row">
        <div class="col-5">
          <label class="labelForm">First name</label>
        </div>
        <div class="col-7">
          <input name="firstName" type="text" id="inputFirstName">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">  Last name</label>
        </div>
        <div class="col-7">
          <input name="lastName" type="text" id="inputLastName">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Street</label>
        </div>
        <div class="col-7">
          <input name="street" type="text" id="inputStreet">
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label class="labelForm">City</label>
        </div>
        <div class="col-7">
          <input name="city" type="text" id="inputCity">
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label class="labelForm">Province</label>
        </div>
        <div class="col-7">
          <input name="province" type="text" id="inputProvince">
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label class="labelForm"> Country</label>
        </div>
        <div class="col-7">
          <select id="inputCountry" name="country"  style="height: 25px;">      <option value="CA">Canada</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="CV">Cabo Verde</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CD">Congo, Democratic Republic of the</option>
            <option value="CG">Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curaçao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and McDonald Islands</option>
            <option value="VA">Holy See</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestine, State of</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom of Great Britain and Northern Ireland</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="US">United States of America</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands (British)</option>
            <option value="VI">Virgin Islands (U.S.)</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Postal code</label>
        </div>
        <div class="col-7">
          <input name="postalCode" type="text" id="inputPostalCode">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Email</label>
        </div>
        <div class="col-7">
          <input name="email" type="text" id="inputEmail">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Password</label>
        </div>
        <div class="col-7">
          <input name="password" type="password" id="inputPassword">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Retype your pasword </label>
        </div>
        <div class="col-7">
          <input name="passwordRe" type="password" id="inputPasswordRe">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Home phone number</label>
        </div>
        <div class="col-7">
          <input name="homePhone" type="number"  min=1 id="inputHomePhone">
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <label class="labelForm">Business phone number</label>
        </div>
        <div class="col-7">
          <input name="businessPhone" type="number" min=1 id="inputBusinessPhone">
        </div>
      </div>



      <div class="row">
        <div class="col-5">
          <button type="reset" value="Reset" style="display:block; float:right;" class="btn btn-default" onclick="window.location.href = 'packages.php';"> Back </button>
        </div>
        <div class="col-7">
          <button id="submit" class="btn btn-default" > Register </button>
        </div>
      </div>
    </form>
  </div>


  <?php
  include("footer.php");
  ?>
