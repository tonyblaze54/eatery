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
				<td align="right"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="login.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Login</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td bgcolor="#660066">
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
		<table border="0" width="375" height="487" cellpadding="6" cellspacing="6">
			<tr>
				<td align="right" height="28">
				<p align="left"><font color="#FFFFFF" face="Arial">&nbsp;<b><font size="4">Register</font></b></font></td>
			</tr>
			<tr>
				<td align="right" height="54" valign="top">
		

<?php
include 'connector.php';
{
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$pix=$_POST['pix'];
$datetime=date("d/m/y"); //create date time

if (strlen($_POST['email']) < 9)
{
die ("SORRY");
}
  	  	
$rs_duplicates = mysqli_query($conn, "SELECT id from register where email='$_POST[email]'");
$duplicates = mysqli_num_rows($rs_duplicates);
if ($duplicates > 0)
{	
//die ("ERROR: User account already exists.");

echo "
<div align='center'>
	<table border='0' width='60%'>
		<tr>
			<td  colspan='2'><font color='#FFFFFF'><b>&nbsp;</b></font><font size='5' face='Verdana'><font color='#FF0000'><b>ERROR:</b></font> 
			</font><font size='4' face='Verdana'>This Email Account Belongs to Some 
			One:</font></td>
		</tr>
		<tr>
			<td colspan='2'>
			<p><font face='Verdana'>&nbsp;Check your Email or Change it</font></td>
		</tr>
		<tr>
			<td width='84%'>
			&nbsp;</td>
			<td width='13%' bgcolor='#C0C0C0'>
			<p align='center'><font face='Verdana' color=#FFFFFF><b>Register Now</b></font></td>
		</tr>
	</table>
</div>
";
exit();
}	
$password = password_hash($password, PASSWORD_BCRYPT);
$sql="INSERT INTO register(fullname, email, password, pix, datetime)VALUES('$fullname','$email','$password','$pix','$datetime')";
$result=mysqli_query($conn, $sql);
}
echo "<meta http-equiv='refresh' content='10;url=menuphp.php?email=$email'>";

mysqli_close($conn);
?>
				</td>
			</tr>
			<tr>
				<td align="right" valign="top">
				
<div align="center">
	
			<Table border="0" ><tr>
				<Form action="signupphp.php" method="POST">
				<td colspan="2"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">Full 
				Name:</font></b></font></td></tr><tr><td colspan="2">
					<font size="3" color="#FFFFFF">
					<input name='fullname' class='textfield'  size='47' onBlur="if(this.value=='') this.value='Your Full Name...'" onFocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" value='Your Full Name...' title='TYPE YOUR EMAIL OR PHONE HERE TO SIGN IN' ></font></td></tr><tr>
				<td colspan="2"><font color="#FFFFFF">&nbsp;<font face="Verdana"><b>Email:</b></font></font></td></tr><tr><td colspan="2">
					<font size="3" color="#FFFFFF">
					<input name='email' class='textfield' id='email' size='47' onBlur="if(this.value=='') this.value='Your Correct Email...'" onFocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" value='Type Your Correct Eamil...' title='TYPE YOUR EMAIL OR PHONE HERE TO SIGN IN' ></font></td></tr><tr>
				<td colspan="2"><font color="#FFFFFF">&nbsp;<font face="Verdana"><b>Password:</b></font></font></td></tr><tr><td colspan="2">
					<input name='password' class='textfield' id='password' size='47' onBlur="if(this.value=='') this.value='Pass...'" onFocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" value='Pass...' title='TYPE YOUR EMAIL OR PHONE HERE TO SIGN IN' type="password" ></td></tr><tr>
					<td width="97%" colspan="2">
                &nbsp;<font face="Arial" color="#FFFFFF"><b>Sex: </b></font>
				<input type="radio" value="male" checked name="pix"><font face="Arial" color="#FFFFFF"><b> 
				Male </b></font><input type="radio" value="femal" name="pix"><font face="Arial" color="#FFFFFF"><b> 
				Female</b></font></td>
					</tr><tr>
					<td width="76%">
                &nbsp;</td>
					<td width="21%" bgcolor="#FFFFFF">
					<input type='submit' name='submit0' value='Register' title='CLICK HERE TO SIGN IN' style="background-color: #000000; color: #FFFFFF; height: 26;  margin: 0; vertical-align: top; font-style: normal; font-variant: normal; font-weight: Bold; font-size: 12px; font-family: arial, sans-serif, bold; width: 75"></td></tr></form></table>
			</div>
				<p align="left">&nbsp;</td>
			</tr>
			</table>
		</div>
		<p>&nbsp;</td>
	</tr>
</table>

</body>

</html>







































