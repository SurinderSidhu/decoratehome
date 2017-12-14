<?php
 
$db_name = "surinderdb";
$db_server = "localhost";
$db_user = 'surinder';
$db_pass = 'surinder';
 
$conn = new MySQLi($db_server, $db_user, $db_pass, $db_name) or die(mysqli_error());
?>
