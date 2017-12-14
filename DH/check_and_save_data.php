<?php
if(isset($_POST['name'])) {
     
   

 // connect to the database
 include('database.php');
 
	$sql = "INSERT INTO contact (first_name, last_name, email, phone, pincode, description) VALUES
('" . $_POST["name"] . "' ,'" . $_POST["lastname"] . "' , '" . $_POST["email"] . "' , '" . $_POST["phone"] . "' , '" . $_POST["pincode"] . "' , '" . $_POST["description"] . "')";

	if ($conn->query($sql) === TRUE) {
		$message = 'Thank you for your suggestion. We will contact you soon.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
	}	 
	$conn->close();
}
die();
?>