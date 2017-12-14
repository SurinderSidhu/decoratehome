<?php
include('connection.php');
$FName = $_POST['fname'];
$LName = $_POST['lname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Pincode = $_POST['pincode'];
$Message = $_POST['message'];

$sql = "INSERT INTO contact (fname, lname, email, phone, pincode, message) VALUES ('$FName','$LName','$Email','$Phone','$Pincode','$Message');";

if(!mysql_query($conn,$sql))
{
	echo "Sorry there is some problem occured.Please try agian later.";
}
else
{
	echo "Thanks";
}
header('Location:contact-us.php');
?>