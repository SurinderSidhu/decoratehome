<?php 
include('database.php');
	$Fname = $_POST['firstname'];
	$Lname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Pincode = $_POST['pincode'];
	$Address = $_POST['address'];
	$SAddress = $_POST['saddress'];
		$sql = "INSERT INTO purchase (fname, lname, email, phone, pincode, address, saddress) VALUES 
		('$Fname' ,'$Lname' , '$Email' , '$Phone' , '$Pincode' , '$Address', '$SAddress')";
		
	if (!mysqli_query($conn,$sql)) {
		
		echo "A problem occured.Please try again later.";
	}	 
	else
	{
		header('Location:checkoutfinal.php');
	}
	$conn->close();  
	?>
