<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    //if (isset($_POST['mobile']) && isset($_POST['password']))
	if (isset($_POST['sign']) ){
        $uname = $_POST['uname'];
        $password = $_POST['password'];
		$sql="select * from `user` where Username='$uname';";
            $res=mysqli_query($connection,$sql);
            $row = mysqli_fetch_assoc($res);
            if ($uname==$row['Username'] && $password==$row['Password'])
            {    
		        session_start();
	            $_SESSION['user']=$_POST["uname"];
                $smsg ="Successfully Logged In";
            }
            else
            {   
		        
                $fmsg="User name or password is wrong";
            }
	}
			?>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>

<?php if(isset($smsg)){ ?><div class="container"><div   class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php  header( "refresh:3; url=journey.php" ); echo $smsg; ?></div> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="container"><div  class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <?php echo $fmsg; ?> </div></div><?php } ?>
	  <h1 class="text-center">LOGIN
</h1>
	  <div class="container " style="margin-left:450px; margin-top:70px; color:white;">
<form  method="POST">
<div class="form-group row">
<div class="col-2">
<label for="uname">User Name</label></div>
<div class="col-3">
<input type="text" name="uname" id="uname" class="form-control" required>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<label for="pass">Password</label></div>
<div class="col-3">
<input type="password" name="password" id="pass" class="form-control" required>
</div>
</div>
<br>
<div class="form-group row">
<div class="col-2">
<button type="submit" name="sign" class="btn btn-info" style="margin-left:200px;">SIGN IN</button>
</div>
</div>
<div class="form-group row">
<div class="col-2">
<button type="button" class="btn-xl btn-info"  style="margin-left:200px;"><a href="forp.php"  >FORGOT PASSWORD??</a></button>
</div>
</div>

<div class="form-group row">
<div class="col-2">
<button type="button" class="btn btn-info" style="margin-left:200px;"><a href="signup.php"  >SIGN UP</a></button>
</div>
</div>
</form>
</div>
<?php
	include "footer.php";
?>
</body>
</html>
