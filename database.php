<?php

$conn = mysqli_connect('localhost','root','') or die(mysqli_error());
if(!$conn)
{
	echo'no';
}
else
{
	echo'yes';
}
if(!mysqli_select_db($conn,'homedecor'))
{
	echo'no database connected';
}
else{
	echo'db connected';
}
?>
