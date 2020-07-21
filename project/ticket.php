<html>
<head>
<style>
body{
  background-image:url("img1.jpg");
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
include "connect.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `booking` where Booking_id='".$_GET['id']."'" ;
$str= mysqli_query($connection,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=journey.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	while($row=mysqli_fetch_array($str))
{

	$query2="SELECT * FROM `bus` where Id='".$row['Bus_id']."'" ;
	$str1= mysqli_query($connection,$query2);
	$row2= mysqli_fetch_array($str1);

	echo '<div class="container">';
	echo '<h1 style="font-size:30px;color:red;text-align:center;">TICKET</h1>';
	echo '<table align="center" border=2  style="font-size:20px;color:white; margin-top:100px;font-family:Comic Sans MS, cursive, sans-serif;text-align:center;border-radius:15px;">';

	echo "<tr>";
		echo "<td>";
		echo '<i>Date of Booking:</i>';
		echo "</td>";

		echo "<td>";
		echo $row['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Bus Name:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Name'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Origin:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Origin'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Destination:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Destination'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Arrival time:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Arrival_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Departure time:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Departure_time'];
		echo "</td>";
		echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4>Date of journey:</i>';
		echo "</td>";

		echo "<td>";
		echo $row2['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>No of seats:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Seats_no'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Total fare:</i>';
		echo "</td>";
    echo "<td>";
		echo $row['Total_fare'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Bank:</i>';
		echo "</td>";

		echo "<td>";
		echo $row['Bank'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<i>Payment method:</i>';
		echo "</td>";

		echo "<td>";
		echo $row['Payment_method'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	}
}
?>
</body>
</html>
