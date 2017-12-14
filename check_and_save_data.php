<?php
	
	// connect to the database
	include('database.php');
	
	$Fname = $_POST['firstname'];
	$Lname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Pincode = $_POST['pincode'];
	$Message = $_POST['message'];
		$sql = "INSERT INTO contact(fname, lname, email, phone, pincode, message) VALUES 
		('$Fname' ,'$Lname' , '$Email' , '$Phone' , '$Pincode' , '$Message')";
		
	if (!mysqli_query($conn,$sql)) {
		
		echo "A problem occured.Please try again later.";
	}	 
	else
	{
		header('Location:contact-usOK.php');
	}
	$conn->close();
?>