<?php session_start();?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="jou.css">
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


</head>
<body>
 <?php include "header1.php"?>
   <div>
						<center><i style="font-size:25; color:orange ; font-family:Comic Sans MS, cursive, sans-serif;"><strong>Hello <?php echo $_SESSION['user']?></i></strong></center>
						<br>
						<h1 align="center" style="font-size:25; color:white;">Welcome to BusADDA</h1>
					</div>              
<h1>JOURNEY</h1>
<h2> Choose your Destination!!!</h2>

<div class="split left">
<form method="POST" action="book.php">
<div class="ab">From</div>
<select name="place1" class="ac">
<option value="jaipur">Jaipur</option>
<option value="ajmer">Ajmer</option>
<option value="jodhpur">Jodhpur</option>
<option value="udaipur">Udaipur</option>
<option value="delhi">Delhi</option>
</select>
</div>
<div class="split right">
<div class="ab">To</div>
<select name="place2" class="ac">
<option value="jaipur">Ajmer</option>
<option value="ajmer">Jaipur</option>
<option value="jodhpur">Jodhpur</option>
<option value="udaipur">Udaipur</option>
<option value="delhi">Delhi</option>
</select>
</div>
<div class="split1 center">
<div class="ab" align="center">On</div>
<br>
<input type="date" name="date" class="ac">
<br><br>
<input type="text" name="noofseats" placeholder="Number of Seats" class="ac">
<br><br>
<button type="submit">Next</button>
</div>
</form>
</body>
</html>

