function validateForm() {
  /** File creator: Gia Thanh Vuong
   *  validate for registered customer
   */

  var flag = 0; //error code if other than 0
  var nameReg = /^[A-Za-z]+$/;
  //var numberReg =  /^[0-9]+$/;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  // var names = $('#nameInput').val();
  // var company = $('#companyInput').val();
  // var email = $('#emailInput').val();
  // var telephone = $('#telInput').val();
  // var message = $('#messageInput').val();
  // var firstName = $('#inputFirstName').val();
  // var lastName = $('#inputLastName').val();
  // var street = $('#inputStreet').val();
  // var city = $('#inputCity').val();
  // var province = $('#inputProvince').val();
  // var country = $('#inputCountry').val();
  // var postalCode = $('#inputPostalCode').val();
  // var email = $('#inputEmail').val();

  var tripTypeId = $('#inputTripTypeId').val();
  var travelerCount = $('#inputTravelerCount').val();
  var ccName = $('#inputCCName').val();
  var ccNumber = $('#inputCCNumber').val();

  $('.error').hide();

  var values = new Array(  tripTypeId,                travelerCount,                ccName,              ccNumber);
  var fieds = new Array (  '#inputTripTypeId',     '#inputTravelerCount',         '#inputCCName',      '#inputCCNumber');
  var msgs = new Array (   'type of trip',           'number of travellers',       'credit card type',    'credit card number'   );

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
