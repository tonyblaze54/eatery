<?php
include 'connector.php';


$sql="SELECT * FROM request ORDER BY id DESC"; 
$result=mysqli_query($conn, $sql); ?>

<font face='verdana' size='5' color='Green'><b>STUDENTS REQUESTS</b> | <a href="index.htm">BACK</a></font>
<hr>

<?php while($rows=mysqli_fetch_array($result)){ // Start looping table row ?>


<blockquote>


<font face='verdana' size='2' color='Green'>
<b>FULL NAME:<?php echo $rows['fullname'];?></b></font><br>
<font face='verdana' size='2' color='black'>
FOOD:<?php echo $rows['food'];?><br>
SNACKS:<?php echo $rows['Snacks'];?><br>
BEVERAGE:<?php echo $rows['beverage'];?><br>
DRINK:<?php echo $rows['drink'];?><br>
CONTACT:<?php echo $rows['contact'];?><br>
DATE:<?php echo $rows['datetime'];?><br>
</font></blockquote><p>


<?php ; } mysqli_close($conn); ?>