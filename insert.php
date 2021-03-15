<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxcrud');
extract($_POST);
if(isset($_POST['submit'])){


	$q="insert into ajaxlogin (first_name,last_name,Email,phone_no,Address,birthday,gender,state,zip_code,company) values ('$fname','$lname','$email','$phone','$address','$birthday','$gender','$state','$zip','$company')";
	echo '<script>alert("Success")</script>'; 
	$query=mysqli_query($con,$q);
	// header('location:iinsert.php');

}

?>