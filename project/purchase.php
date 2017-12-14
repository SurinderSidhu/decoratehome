<?php
if(isset($_POST['name'])) {
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
	   
    $error_message = "";
	
  
	$string_exp = "/^[A-Za-z .'-]+$/";
    if(isset($_POST['name']) && (!($_POST['name'] == ""))){
		if(!preg_match($string_exp,$_POST['name'])) {
			$error_message .= 'The Name you entered does not appear to be valid.<br />';
		}
	}
  

  
	if(strlen($error_message) > 0) {
		died($error_message);
	}


 // connect to the database
 include('database.php');
 
	$sql = "INSERT INTO contact (id, name, email, phone, pincode, discription) VALUES
('" . $_POST["id"] . "' , '" . $_POST["name"] . "' , '" . $_POST["email"] . "' , '" . $_POST["phone"] . "' , '" . $_POST["pincode"] . "' , '" . $_POST["discription"] . "')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully </br> \n";
		echo "Use the Brwoser's BACK button, print your details, sign and hand in.</br> \n";
	}	 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
die();
?>