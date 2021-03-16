<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxcrud');
extract($_POST);
if(isset($_POST['submit'])){


// 	 $fname = $_POST['fname'];
//  $lname = $_POST['lname'];
//  $email = $_POST['email'];
//  $phone = $_POST['phone'];
//  $address  = $_POST['address'];
//   $birthday = $_POST['birthday'];
//    $gender = $_POST['gender'];
//     $state = $_POST['state'];
//      $zip = $_POST['zip'];
//       $company = $_POST['company'];


// if($email != "") {
// $q = mysqli_query("select * from `ajaxlogin` where email='".$email."'");
// $fetch = mysql_num_rows($q);
// if($fetch>0)
// {
// echo "email already inserted";
// }
// else
// {
// $sql = mysqli_query("INSERT INTO ajaxlogin (email) VALUES ('$email')");
// echo "Thank you for Submitting. Redirecting back to Home Page";
// }}


	$q="insert into ajaxlogin (first_name,last_name,Email,phone_no,Address,birthday,gender,state,zip_code,company) values ('$fname','$lname','$email','$phone','$address','$birthday','$gender','$state','$zip','$company')";
	echo '<script>alert("Success")</script>'; 

	echo $q;
	$query=mysqli_query($con,$q);
	// header('location:iinsert.php');

}

?>