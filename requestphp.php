<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Home</title>
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
				<td align="right" bgcolor="#660066"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="contact%20us.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Contact Us</span></font></a></font></b></td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><b>
				<font face="Arial" color="#FFFFFF" size="4">&nbsp;<a href="index.htm" style="text-decoration: none; color: #ffffff; font-family: tahoma; size: &amp;quot; 2&amp;quot; font-weight: normal"><font color="#FFFFFF"><span style="text-decoration: none">Log Out</span></font></a></font></b></td>
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
		<table border="0" width="375" height="487" cellpadding="6" cellspacing="6">
			<tr>
				<td align="right" height="28">
				<p align="left"><font color="#FFFFFF" face="Arial">&nbsp;<b><font size="4">REQUEST 
				RESULT</font></b></font></td>
			</tr>
			<tr>
				<td align="right" height="54" valign="top">
<?php
include 'connector.php';
{
$fullname=$_POST['fullname'];
$food=$_POST['food'];
$snacks=$_POST['snacks'];
$beverage=$_POST['beverage'];
$drink=$_POST['drink'];
$contact=$_POST['contact'];
$datetime=date("d/m/y"); //create date time


$sql="INSERT INTO request(fullname, food, snacks, beverage, drink, contact,datetime)VALUES('$fullname','$food','$snacks','$beverage','$drink','$contact','$datetime')";
$result=mysqli_query($conn, $sql);
}
echo "<font color='#FFFFFF' face='Verdana' size='4'>Your Food Request has Been Successfully Sent</font>";

mysqli_close($conn);
?>	
	
	</td>
			</tr>
			<tr>
				<td align="right" valign="top">
				<div align="center">
				<Table  width="342" cellspacing="6" cellpadding="5" ><tr>
				<td width="77"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">FOOD</font></b><font face="Verdana"><b>&nbsp;</b></font></font></td>
				<Form action="requestphp.php" method="Post">
					<td width="255">
					<select size="1" name="food">
					<option value="SELECT FOOD" selected>PLEASE SELECT CHOICE DISH
					</option>
					<option value="Egusi Soup with fufu">Egusi Soup with fufu
					</option>
					<option value="Banga soup with semovita">Banga soup with semovita
					</option>
					<option value="Rice with Beans and Beef">Rice with Beans and Beef
					</option>
					<option value="fried Rice with Chicken">fried Rice with Chicken
					</option>
					<option value="Jollof Rice with Fried Plaiain">Jollof Rice with Fried Plaiain
					</option>
					<option value="Okro Soup with Eba or wheat">Okro Soup with Eba or wheat
					</option>
					</select></td></tr><tr>
                                <td width="77"><font color="#FFFFFF"><b><font face="Verdana">
				&nbsp;SNACKS </font></b></font></td>
                                <td width="255">
				<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
				        <select size="1" name="snacks">
				        <option value="SELECT FOOD" selected>PLEASE SELECT SNACKS...
                                        </option>
				        <option value="Meat Pie">Meat Pie</option>
				       <option value="Chicken Pie">Chicken Pie
				       </option>
				       <option value="Sandwiches">Sandwiches</option>
                                       <option value="Chin-Chin">Chin-Chin</option>
                                       <option value="Samosa">Samosa</option>
                                       <option value="Spring Roll">Spring Roll</option>
                                       <option value="Hotdog">Hotdog</option>
				       </select></td></tr><tr>
				<td width="77"><font color="#FFFFFF"><b><font face="Verdana">
				&nbsp;BEVERAGE </font></b></font></td>
				<td width="255">
				<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
				<select size="1" name="beverage">
				<option value="SELECT FOOD" selected>PLEASE SELECT BEVERAGE...
				</option>
				<option value="Coffe with cream">Coffe with cream</option>
				<option value="Chocolate with Cream">Chocolate with Cream
				</option>
				<option value="Tea with Cream">Tea with Cream</option>
				</select></td></tr><tr>
					<td width="77"><font color="#FFFFFF">&nbsp;</font><b><font face="Verdana" color="#FFFFFF">DRINK</font></b></td>
					<td width="255">
					<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
					<select size="1" name="drink">
					<option value="SELECT FOOD" selected>WHAT ABOUT YOUR DRINKS...?
					</option>
					<option>Pepsi Cola</option>
					<option value="Mirinda">Mirinda</option>
					<option value="CocaCola">CocaCola</option>
					<option value="Fanta">Fanta</option>
					<option value="Sprite">Sprite</option>
					</select></td></tr><tr>
					<td width="77" height="25"><font color="#FFFFFF">&nbsp;</font><b><font face="Verdana" color="#FFFFFF">Contact</font></b></td>
					<td width="255" rowspan="2">
					<textarea rows=7 cols=32 name="contact" onblur="if(this.value=='') this.value='Type your message Here...'" onfocus="this.select(); if(this.value.slice(-3)=='...') this.value=''" title="TYPE ON THE RIGHT SIDE OF THE BODY HERE" size="26" style="border: 1px solid #000000; background: #FFFFFF; color: #000000; height: 116; margin: 0; vertical-align: top; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; font-family: arial, sans-serif; width: 224; padding-left:6px; padding-right:8px; padding-top:5px; padding-bottom:0" maxlength="100" onkeyup="return ismaxlength(this)">Type your message Here...</textarea></td></tr><tr><td width="77" height="95">
						&nbsp;</td></tr><tr><td>&nbsp;</td><td>
						<input type='submit' name='submit' onClick="return checkmail(this.form.email)" value='Order Now' title='CLICK HERE TO REGISTER' style='background-color: #C0C0C0; border:2px solid #000000; color: #000000; height: 24; margin: 2; vertical-align: top; font-style: normal; font-variant: normal; font-weight:bold; font-size: 14px; font-family: arial, sans-serif;  width:84; '><input type='reset' value='Reset' title='CLICK HERE TO REGISTER' style='background-color: #FFFFFF; border:1px solid #C0C0C0; color: #C0C0C0; height: 24; margin: 2; vertical-align: top; font-style: normal; font-variant: normal; font-weight:bold; font-size: 14px; font-family: arial, sans-serif;  width:93; '></td></Form></tr></Table> 
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