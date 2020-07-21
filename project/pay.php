
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="pay.css">
<!-- footer css include on each page -->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<style>
body{
  background-image:url("pic9.jpg");
  background-color: #cccccc;
  height:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<?php 
	if(session_start()){
		$_SESSION['Total_fare']=$_GET['Total_fare'];
		$_SESSION['Bus_id']=$_GET['Bus_id'];
		$_SESSION['Seats_no']=$_GET['Seats_no'];
	}
	else{echo "hhhh";}
?>
<?php include "header1.php";?>
<h1>PAYMENT</h1>
<br><br><br>
<div class="container" style="margin-left:450px; color:white; font-size:18px;">
<form  method="POST" action="book1.php">
 <div class="form-group row">
 <div class="col-2">
<label for="bank">Select a bank</label></div>
<div class="col-4">
<select name="Bank" id="que"  class="form-control" required>
<option value="SBH">Bank of Baroda</option>
  	<option value="SBI">SBI</option>
  	<option value="AB">Axis Bank</option>
</select>
</div>
</div>
 <div class="form-group row">
 <div class="col-2">
<label for="pay">Choose a payment method</label></div>
<div class="col-4">
<select name="Payment_method" id="pay"  class="form-control" required>
<option value="Net Banking">Net Banking</option>
  	<option value="Debit card">Debit card</option> 
</select>
</div>
</div>
<div class="form-group row">
 <div class="col-2">
<p> <i>Total Fare:</i><i style="color:orange";> <?php echo $_GET['Total_fare'] ?></i><i></p>
</div>
</div>
<div class="form-group">
<div class="col-4">
<input type="submit" name="signup" class="btn btn-primary" value="NEXT" style="margin-left:250px;">
</div>
</div>
</form>
</div>
<br><br><br>
<!--<div class="ab">
<form action="book1.php" method="POST">
  Select a bank
    <br>
	<div class="ac">
  <select name="Bank" >
  	<option value="SBH">Bank of PKR</option>
  	<option value="SBI">Standard Chartered</option>
  	<option value="AB">ABC Bank</option>
	</select></div>
 Choose a payment method
   <br>
   <div class="ac">
<select name="Payment_method">
  	<option value="Net Banking">Net Banking</option>
  	<option value="Debit card">Debit card</option> 
	</select>
	</div>
  	<br>
  	<p> <i>Total Fare: <?php echo $_GET['Total_fare'] ?></i></p>
	
  <br>
  <input  type="submit" value="PAY">
</form>
</div>-->
<?php include "footer.php";?>
</body>
</html>
