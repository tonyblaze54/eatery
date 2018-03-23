<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body topmargin="0" rightmargin="0" leftmargin="0">

<table border="1" width="100%" height="706" bordercolor="#660066" bgcolor="#660066" align="right">
	<tr>
		<td bgcolor="#990099" width="647">
		<div align="right">
		<table border="0" width="117" cellspacing="6">
			<tr>
				<td align="right"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="index.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Home</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="about%20us.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">About Us</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="contact%20us.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Contact Us</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td align="right" bgcolor="#000000"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="login.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Login</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td>
				<p align="right"><font size="4">&nbsp;</font><b><a href="register.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font size="4" face="Arial" color="#FFFFFF"><span style="text-decoration: none">Register</span></font></a></b></td>
			</tr>
			<tr>
				<td>
				&nbsp;</td>
			</tr>
			<tr>
				<td>
				<p align="right"><b><font face="Arial" size="4" color="#FFFFFF">
				<a href="admin.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF">
				<span style="text-decoration: none">Admin</span></font></a></font></b></td>
			</tr>
		</table>
		</div>
		</td>
		<td>
		<div align="left">
		<table border="0" width="375" height="253" cellpadding="6" cellspacing="6">
			<tr>
				<td align="right" height="28">
				<p align="left"><font color="#FFFFFF" face="Arial">&nbsp;</font><b><font face="Arial" size="4" color="#FFFFFF">Login</font></b></td>
			</tr>
			<tr>
				<td align="right" height="73">
				
<?php
include 'connector.php';

$email=$_POST['email'];
$password=$_POST['password'];

$email=mysqli_real_escape_string($conn, $email);
$password=mysqli_real_escape_string($conn, $password);

 
$sql=$query=mysqli_query($conn, "SELECT * FROM register where email='$email' AND password='$password' ");
$count=mysqli_num_rows($query);
// Get value of id that sent from hidden field 

if($count==1)
{		
echo "<meta http-equiv='refresh' content='0;url=menuphp.php?email=$email'> ";
 $hour = time() + 3600;
 }
Else
{
echo "<font color='#FFFFFF' face='verdana' size='4'>Sorry: There is something wrong with this your Signin Account. </font><p> <b>First:</b> Make Sure You have Sign Up Before <p> <b>Second:</b> Be sure Of Your Email Spacing and Password<p>";

mysqli_close($conn);
}
?>				

</td>
			</tr>
			<tr>
				<td  valign="top">
	<Table class="one" border="0"  width="166"><tr>
		<Form action="loginphp.php" method="POST">
			<td colspan="2">
			&nbsp;<b><font face="Verdana" color="#FFFFFF">Email</font></b></td></tr><tr><td colspan="2">
			<input name='email' class='textfield' id='email' size='48' onblur="if(this.value=='') this.value='Your Correct Email...'" onfocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" value='Your Correct Eamil...' title='TYPE YOUR EMAIL OR PHONE HERE TO SIGN IN' ></td></tr><tr>
		<td colspan="2">&nbsp;<b><font face="Verdana" color="#FFFFFF">Password</font></b></td></tr><tr><td colspan="2">
			<input name='password' class='textfield' id='password' size='48' onblur="if(this.value=='') this.value='Pass...'" onfocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" value='Pass...' title='TYPE YOUR EMAIL OR PHONE HERE TO SIGN IN' type="password" ></td></tr><tr>
			<td width="79%">&nbsp;</td><td width="18%" bgcolor="#FFFFFF">
			<input type='submit' name='submit' value='Login' title='CLICK HERE TO SIGN IN' style="background-color: #C8C8C8; color: #000000; height: 22;  margin: 0; vertical-align: top; font-style: normal; font-variant: normal; font-weight: Bold; font-size: 12px; font-family: arial, sans-serif, bold; width: 60"></td></tr></Table>
				</td>
			</tr>
			</table>
		</div>
		<p>&nbsp;</td>
	</tr>
</table>

</body>

</html>
	




	
