<?php
 
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  echo   $emailErr;
  }
  
}
    ?>
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['signup'])){
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['uname'];
	    $email = $_POST['email'];
        $password = $_POST['password'];
		$repassword = $_POST['repassword'];
        $que = $_POST['que'];
		$ans= $_POST['ans'];
		/* $slquery = "SELECT email FROM `signup` WHERE email = '$email'";
        $selectresult = mysqli_query($connection,$slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         $smsg = 'email already exists';
    }
    elseif($password != $repassword){
         $smsg = "passwords doesn't match";
    }*/
	 
            $sql="select * from `user` where (Email='$email' or Username='$uname'  );";
            $res=mysqli_query($connection,$sql);
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            if ($email==$row['Email'])
            {   
		        
                $fmsg ="Email already exists";
            }
            else
            { 
		        
                $fmsg ="User name already exists";
            }
			}
			elseif($password != $repassword){
				
         $fmsg = "Passwords doesn't match";
        }
    else{
        $query = "INSERT INTO `user` (Fname,Lname,Email,Username,Password,RePassword,Que,Ans) VALUES ('$fname' ,'$lname','$email','$uname','$password','$repassword','$que','$ans')";
        $result = mysqli_query($connection, $query);
        if($result){
			session_start();
            $smsg = "User Created Successfully.";
        }
	}}
    
	
    ?>
	
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="signcs.css">
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<style>
	body{
  background-image:url("login.jpg");
	}
</style>
</head>
<body>
 
<h1 class="text-center">SIGN UP
</h1>
<div class="container" style="margin-left:450px; color:white;">
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
<?php if(isset($smsg)){ ?><div class="container"><div   class="alert alert-success ad" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php  header( "refresh:3; url=login.php" ); echo $smsg; ?></div> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="container"><div  class="alert alert-danger ad" role="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <?php echo $fmsg; ?></div> </div><?php } 
	  ?>
<?php
	include "footer.php";
?>
</body>
</html>

