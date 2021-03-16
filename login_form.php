<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<form id="myform" action="insert.php" method="post" onsubmit="return validation()">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="" required><br>

    <button id="okButton" disabled>OK</button>

  <span id="firstn"></span><br><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="" required>
<br>
 <span id="lastn"></span><br><br>
 <label for="email">Enter your email:</label>
  <br>
  <input type="email" id="email" name="email">
<br>
<span id="email_id"></span><br>
 <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" required><br><br>
  <small>Format: 123-45-678</small><br><br>
  <span id="mobile_no"></span><br><br>

  <label >Address:</label><br>
  <input type="text" id="address" name="address" required><br><br>
  <span id="address_f"></span><br><br>

  <label for="birthday">Birthday:</label><br>
  <input type="date" id="birthday" name="birthday" required><br><br>



  <label for="gender">gender</label><br>

  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>

 

 

  <label for="state">State:</label><br>
  <input type="text" id="state" name="state" required><br><br>
  <span id="state_f"></span><br><br>

<label >Enter zip code</label><br>
  <input type="text" id="zip" name="zip" required><br><br>
  <span id="zip_code"></span><br><br>
  
  
  <label >Enter your company name:</label><br>
  <input type="text" id="company" name="company" required><br><br>
  <span id="company_name"></span><br><br>

<input type="submit" id="submit" name="submit" value="submit">
</form>
<script type="text/javascript">
$(document).ready(function(){
  var form = $('#myform');
  $('#submit').click(function(){
  	$.ajax({

  		url: form.attr("action"), 
  		type: 'post',
  		data: $("#myform input").serialize(),
  		success:function(data){
  			console.log(data);
  		}

  	});
  });

});
// function fuu()
// {
// 	alert('wrong');
// }




const nameField = document.getElementById('fname');
const isValidEmail = emailField.checkValidity();
nameField.addEventListener('keyup', function (event) {
  isValidEmail = emailField.checkValidity();
  
  if ( isValidEmail ) {
    okButton.disabled = false;
  } else {
    okButton.disabled = true;
  }
});






		
function validation(){

var first_n = document.getElementById('fname').value;
if(first_n == "")
{
	document.getElementById('firstn').innerHTML="please fill the name";

	return false;
}
if(!isNaN(first_n)){
	document.getElementById('firstn').innerHTML="only characters are allowed";
	document.getElementById('firstn').style.color="red";
	return false;
}
var last_n = document.getElementById('lname').value;


if(last_n == "")
{
	document.getElementById('lastn').innerHTML="please fill the name";
	return false;
}
if(!isNaN(last_n)){
	document.getElementById('lastn').innerHTML="only characters are allowed";
		document.getElementById('lastn').style.color="red";
	return false;
}

var mobile_number = document.getElementById('phone').value;

if(mobile_number == "")
{
	document.getElementById('mobile_no').innerHTML="please fill the mobile number";
	return false;
}
if(isNaN(mobile_number)){
	document.getElementById('mobile_no').innerHTML="user must write digits only";
		document.getElementById('mobile_no').style.color="red";
	return false;
}

if(mobile_number.length<10 || mobile_number.length>15){
	document.getElementById('mobile_no').innerHTML="enter valid mobile number";

		document.getElementById('mobile_no').style.color="red";
	return false;
}
var address_field = document.getElementById('address').value;
if(address_field == ""){
	document.getElementById('address_f').innerHTML="please fill out address";
	return false;

}
 
 if(!isNaN(address_field)){
 	document.getElementById('address_f').innerHTML="invalid address";
 	return false;
 }


var state_field = document.getElementById('state').value;
if(!isNaN(state_field)){
	document.getElementById('state_f').innerHTML="invalid state";
}



var email_field = document.getElementById('email');
if(email_field==""){
	document.getElementById('mobile_no').innerHTML="please enter email";
		document.getElementById('mobile_no').style.color="red";
	return false;
}
if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email_field));
  {
    return (true);
  }

    alert("You have entered an invalid email address!")
    	document.getElementById('firstn').style.color="red";
    return (false);

}
</script>
</body>
</html>