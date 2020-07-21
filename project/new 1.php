<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="signcs.css">
<style>
.topnav {
    background-color: #333;
    overflow: hidden;
	margin-top:0px;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 26px;
  text-decoration: none;
  font-size: 20px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav-right {
  float: right;
}

</style>
</head>
<body>
                  <div class="topnav" >
                  <h1><a href="index.php">BUSAdda.com</a></h1>
				        <div class="topnav-right">
				        <a href="index.php">Book</a>
						<a href="history.php">History</a>
						<a href="profile.php">Profile</a>
				        <a href="#contact">Logout</a>
						</div>
						</div>
<h1 class="text-center">SIGN UP
</h1>
<div class="container" style="margin-left:450px;">
<form  method="POST">
<div class="form-group row">
<div class="col-2">
<label for="fname">First Name</label></div>
<div class="col-4">
<input  type="text" name="fname" id="fname" class="form-control center" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="lname" >Last Name</label></div>
<div class="col-4">
<input  type="text" name="lname"  id="lname" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="ename">Email-id</label></div>
<div class="col-4">
<input type="email" name="email" id="ename" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="uname">User Name</label></div>
<div class="col-4">
<input  type="text" name="uname"  id="uname" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="pass">Password</label></div>
<div class="col-4">
<input type="password" name="password" id="pass" class="form-control"
title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="repass">*Re-Enter Password</label></div>
<div class="col-4">
<input type="password" name="repassword" id="repass" class="form-control"
 title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
 </div>
 </div>
 <div class="form-group row">
 <div class="col-2">
<label for="que">Security Question</label></div>
<div class="col-4">
<select name="que" id="que"  class="form-control" required>
<option value="pet">Favourite Pet</option>
<option value="book" >Favourite Book</option>
<option value="chocolate" >Favourite Chocolate</option>
<option value="movie" >Favourite Movie</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-2"></div>
<div class="col-4">
<input type="text" name="ans" class="form-control" required>
</div>
</div>
<div class="form-group">
<div class="col-4">
<input type="submit" name="signup" class="btn btn-primary" value="Sign Up" style="margin-left:250px;">
</div>
</div>

</form>
</div>
<?php include "footer.php";?>
</body>
</html>