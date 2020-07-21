<html>
<head>
<style>
body{
  background-image:url("bg3.jpg");
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<?php include 'header1.php'; ?>
<?php
session_start();
include "connect.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `booking` where user='".$_SESSION['user']."'" ;
$str= mysqli_query($connection,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 )
{
	echo '<h3 style= "text-align:center;"> <font color="red">You have not booked any buses </font></h3>';
	echo "<br>";
}
else
{
	//echo '<h3 style= "text-align:center;"> <font color="red">Booking History </font></h3>';
echo '<table align="center" border=1 align="center" border=2  style="font-size:30px;color:black; margin-top:200px;font-family:Comic Sans MS, cursive, sans-serif;text-align:center;border-radius:15px;" >
<tr>
<th> Date and Time</th>
<th> Bus id  </th>
<th> No of seats</th>
<th> Total fare </th>
<th> Bank </th>
<th> Payment method </th>
<th> View Ticket</th>
</tr>';
while($row=mysqli_fetch_array($str))
{
	$Date= $row['Date'];
	$Fare= $row['Total_fare'];
	$id= $row['Bus_id'];
	$req=$row['Seats_no'];
	$book_id=$row['Booking_id'];
	echo "<tr>";

	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Bus_id']."</td>";
	echo "<td>".$row['Seats_no']."</td>";
	echo "<td>".$row['Total_fare']."</td>";
	echo "<td>".$row['Bank']."</td>";
	echo "<td>".$row['Payment_method']."</td>";
//	echo "<td>";
//	echo '<a href="cancel.php?Date='.$Date.' & Fare='.$Fare.'& id='.$id.'& req='.$req.'">Cancel Now</a>';
//	echo "</td>";
	echo "<td>";
	echo '<a href="ticket.php?id='.$book_id.'">View Ticket</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>