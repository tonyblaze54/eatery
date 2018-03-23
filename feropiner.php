<?php
include 'connector.php'; 
{

$password=$_POST['password'];


$sql="INSERT INTO registeradmin ( password)VALUES('$password')";
$result=mysqli_query($sql);
}
echo "<meta http-equiv='refresh' content='1;url=admin.htm'>";
echo "<center><img src='images/loading.gif' width='40' height='40'><p><font color='#FFFFFF'>Creating New Account<br>2 seconds remaining...</font>";


mysqli_close();
?> 