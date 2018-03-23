<?php
$host="localhost"; // Host name 
$username="myeatery"; // mysqli username 
$password="mypass123"; // mysqli password 
$db_name="eatery"; // Database name 
// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, $db_name) or die("cannot select DB");
?>

