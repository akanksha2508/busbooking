<html>
<head>
<link rel="stylesheet" type="text/css" href="book.css">
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>
<?php include "header1.php"; ?>
<?php
session_start();
require('connect.php');
$req=$_POST["noofseats"];
$Bus_id;
$sel="SELECT * FROM `bus` where Origin='".$_POST["place1"]."' and Destination='".$_POST["place2"]."' and Date='".$_POST["date"]."' and Seats>= ".$_POST["noofseats"]."  " ;
$str= mysqli_query($connection,$sel);
//$rows= mysqli_num_rows($str) ;
if(mysqli_num_rows($str)==0)
{
    echo '<h2 style= "text-align:center;"> <font color="red" size="40px" face="Comic Sans MS, cursive, sans-serif">No available Buses </font></h2>';
	echo "<br>";
	}
else
{ echo '<h2 style= "text-align:center;"> <font color="red" size="40px" face="Comic Sans MS, cursive, sans-serif"><center>Available Buses </center></font></h2>';
     echo '<table  align="center" border=2  style="font-size:30px; color:white;font-family:Comic Sans MS, cursive, sans-serif;text-align:center;border-radius:15px;">
<th> Id </th>
<th> Name of the bus</th>
<th> Available seats </th>
<th> Origin </th>
<th> Destination </th>
<th> Date of journey</th>
<th> Arrival time </th>
<th> Departure time </th>
<th> Fare </th>
<th> Book </th>
</tr>';
while($row=mysqli_fetch_array($str))
{$Bus_id = $row['Id'];
	$Total_fare= $row['Fare'] * $req;
	
	echo '<tr>';

	echo "<td >".$row['Id']."</td>";
	echo "<td >".$row['Name']."</td>";
	echo "<td >".$row['Seats']."</td>";
	echo "<td >".$row['Origin']."</td>";
	echo "<td >".$row['Destination']."</td>";
	echo "<td >".$row['Date']."</td>";
	echo "<td >".$row['Arrival_time']."</td>";
	echo "<td >".$row['Departure_time']."</td>";
	echo "<td >".$row['Fare']."</td>";
	
	echo "<td>";
	echo '<a href="pay.php?Seats_no='.$req.'&Bus_id='.$Bus_id.'&Total_fare='.$Total_fare.'">Book Now</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
<?php
	include "footer.php";
?>
</body>
</html>