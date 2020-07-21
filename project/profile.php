<?php include "connect.php";
session_start(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pro.css">
</head>
<body>
<header>
						<center><i><font size="15"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						<br>
						<h1 align="center" style="font-size:35; color:grey;">Welcome to BusADDA</h1>
					</header>
<?php


//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `user` where Username='".$_SESSION['user']."'" ;
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
     echo '<h2 style="color:red; font-size:30px; margin-top:30px;font-family:Comic Sans MS, cursive, sans-serif;text-align:center;" align="center";"> <i>YOUR PROFILE</i></h2>';
	echo '<div class="container" style="margin-top:50px;">';
	
	//echo '<table style="width:100%" align="center">';
     echo '<table  align="center" border=2  style="font-size:30px;color:black;font-family:Comic Sans MS, cursive, sans-serif;text-align:center;border-radius:15px;">';
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>First Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Fname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Last Name:</i></h4>';
		echo "</td>";
		echo "<td>";
		echo $row['Lname'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Username:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Username'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Email:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Email'];
		echo "</td>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>";
		echo $row['Que'];
		echo "</td>";

		echo "<td>";
		echo $row['Ans'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
}
?>
</body>
</html>
