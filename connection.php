<?php
$conn = @mysql_connect('localhost','root','') or die("could not connect".mysql_error());
$db = mysql_select_db("homedecor") or die("could not connect to database");
?>