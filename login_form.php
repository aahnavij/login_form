<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<form id="myform" action="insert.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="">
<br>
 <label for="email">Enter your email:</label>
  <br>
  <input type="email" id="email" name="email">
<br>
 <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" ><br><br>
  <small>Format: 123-45-678</small><br><br>

  <label >Address:</label><br>
  <input type="text" id="address" name="address" ><br><br>

  <label for="birthday">Birthday:</label><br>
  <input type="date" id="birthday" name="birthday"><br><br>


  <label for="gender">gender</label><br>

  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>

 

 

  <label for="state">State:</label><br>
  <input type="text" id="state" name="state"><br><br>

<label >Enter zip code</label><br>
  <input type="text" id="zip" name="zip" ><br><br>
  
  
  <label >Enter your company name:</label><br>
  <input type="text" id="company" name="company" ><br><br>

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
	</script>
</body>
</html>