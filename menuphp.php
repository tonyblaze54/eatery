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
		<table border="0" width="375" height="487" cellpadding="6" cellspacing="6">
			<tr>
				<td align="right" height="28">
				<p align="left"><font color="#FFFFFF" face="Arial">&nbsp;<b><font size="4">OUR 
				MENU</font></b></font></td>
			</tr>
			<tr>
				<td align="right" height="27" valign="top">
				
	<?php include 'connector.php'; 
$email=$_GET['email']; 
$email=mysqli_real_escape_string($conn, $email); 
$sql="SELECT * FROM register WHERE email='$email'"; 
$result=mysqli_query($conn, $sql); ?>

<Form action="requestphp.php" method="Post">
	
<?php while($rows=mysqli_fetch_array($result)){ // Start looping table row ?>
	
	
	<Font face="Verdana" size="4" color="#FFFFFF">Hello:<b><?php echo $rows['fullname']; ?></b>:Welcome to NOUN school Eatery. please use the form below to Place Your order.</Font> 
<input type="hidden" name="fullname" value="<?php echo $rows['fullname']; ?>">	
<?php ; } mysqli_close($conn); ?>			
				

				</td>
			</tr>
			<tr>
				<td align="right" height="27" valign="top">
				<img border="5" bordercolor="#FFFFFF" src="images/food.jpg" width="350" height="263"  align="center"></td>
			</tr>
			<tr>
				<td align="right" valign="top">
				<div align="center">
				<Table  width="342" cellspacing="6" cellpadding="5" ><tr>
				<td width="77"><font color="#FFFFFF">&nbsp;<b><font face="Verdana">FOOD</font></b><font face="Verdana"><b>&nbsp;</b></font></font></td>
								<td width="255">
					<select size="1" name="food">
					<option value="SELECT FOOD" selected>PLEADSE SELECT CHOICE DISH
					</option>
					<option value="Egusi Soup with fufu  N600">Egusi Soup with fufu                        N600
					</option>
					<option value="Banga soup with semovita N700">Banga soup with semovita                N700
					</option>
					<option value="Rice with Beans and Beef N600">Rice with Beans and Beef                N600
					</option>
					<option value="fried Rice with Chicken  N800">fried Rice with Chicken                 N800
					</option>
					<option value="Jollof Rice with Fried Plaiain N750">Jollof Rice with Fried Plaiain    N750
					</option>
					<option value="Okro Soup with Eba or wheat  N550">Okro Soup with Eba                  N550
					</option>
                                        <option value="Afang Soup with Eba or wheat N750">Afang Soup with Eba                 N750 
					</option>
                                        <option value="Okro Soup with Fufu or wheat N500">Okro Soup with Fufu                 N500
					</option>
                                        <option value="Efo Riro Soup with Eba or wheat N600">Efo Riro Soup with Eba           N600
					</option>
                                        <option value="Efo Rir Soup with Amala or wheat N700">Efo Riro Soup with Amala        N700 
					</option>
                                        <option value="Ewedu Soup with Amala or wheat  N600">Ewedu Soup with Amala            N600
                                        </option> 
                                        <option value="Egusi Soup with Pounded Yam  N600">Egusi Soup with Pounded Yam         N600
					</option>
					<option value="Ewa-Aganyin with Yam">Ewa-Aganyin with Yam</option>
                                        <option value="Yam Porridge with Fish">Yam Porridge with Fish</option>
					</select></td></tr><tr>
                                <td width="77"><font color="#FFFFFF"><b><font face="Verdana">
				&nbsp;SNACKS </font></b></font></td>
				<td width="255">
				<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
				<select size="1" name="snacks">
				<option value="SELECT FOOD" selected>WHAT ABOUT YOUR SNACKS...?
			        </option>
				<option value="Meat Pie  N200">Meat Pie  N200</option>
				<option value="Chicken Pie N250">Chicken Pie   N250
				</option>
				<option value="Sandwiches N500">Sandwiches N500</option>
                                <option value="Chin-Chin  N200">Chin-Chin  N200</option>
                                <option value="Samosa  N350">Samosa  N350</option>
                                <option value="Spring Roll  N200">Spring Roll  N200</option>
                                <option value="Hotdog  N200">Hotdog  N200</option>
				</select></td></tr><tr>
				<td width="77"><font color="#FFFFFF"><b><font face="Verdana">
				&nbsp;BEVERAGE </font></b></font></td>
				<td width="255">
				<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
				<select size="1" name="beverage">
				<option value="SELECT FOOD" selected>PLEADSE SELECT BEVERAGE...
				</option>
				<option value="Coffe with cream N200">Coffe with cream  N200</option>
				<option value="Chocolate with Cream  N350">Chocolate with Cream   N350
				</option>
				<option value="Tea with Cream N250">Tea with Cream  N250</option>
				</select></td></tr><tr>
					<td width="77"><font color="#FFFFFF">&nbsp;</font><b><font face="Verdana" color="#FFFFFF">DRINK</font></b></td>
					<td width="255">
					<Font color="#008080" style="text-transform: capitalize; font-style: normal; font-variant: normal; line-height: 13pt" face="Verdana" size="2"> 
	
					<select size="1" name="drink">
					<option value="SELECT FOOD" selected>WHAT ABOUT YOUR DRINKS...?
					</option>
					<option>Pepsi N150"</option>
					<option value="Mirinda  N150">Mirinda N150</option>
					<option value="CocaCola  N150">CocaCola  N150</option>
					<option value="Fanta N150">Fanta N150</option>
					<option value="Sprite N150">Sprite N150</option>
                                        <option value="5Live  N400">5Live  N400</option>
                                        <option value="7Up  N150">7Up  N150</option>
                                        <option value="Chivita  N350">Chivita  N350</option>                      
                                        <option value="Red Bull N250">Red Bull  N250</option>
                                        <option value="Vita Milk   N150">Vita Milk   N150</option>
                                        <option value="Tango Orange N150">Tango Orange  N150</option>
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