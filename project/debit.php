<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="debit.css">-->
<style>
body{
  background-image:url("pic10.jpg");
  background-color: #cccccc;
  height:900px;
  width:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
</style>
</head>
<body>
<?php include "header1.php";?>

<div class="container" style="margin-left:550px; margin-top:100px; color:black; font-size:18px;">
<form  method="POST" action="history.php">
<div class="form-group row">
<div class="col-2">
<label for="card">Card Number</label></div>
<div class="col-3">
<input type="text" name="card" id="card" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="name">Name</label></div>
<div class="col-3">
<input type="text" name="name" id="name" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="date">Date</label></div>
<div class="col-3">
<input type="date" name="date" id="date" class="form-control" required>
</div>
</div>
<div class="form-group">
<div class="col-4">
<input type="submit" name="pay" class="btn btn-primary" value="PAY" style="margin-left:250px;">
</div>
</div>
</form>
</div>
</body>
</html>
