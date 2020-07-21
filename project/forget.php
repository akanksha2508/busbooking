<?php
	require('connect.php');
    if (isset($_POST['getp']) ){
        $que = $_POST['que'];
		$ans= $_POST['ans'];
		$uname= $_POST['uname'];
		$sql="select Password,Username from `user` where (Que='$que' and Ans='$ans' and Username='$uname' );";
             $result = mysqli_query($connection,$sql); 
             if(mysqli_num_rows($result)==1){ 
            while($rs = mysqli_fetch_array($result))
			{				
                 
                 $password=$rs["Password"]; 
				 $username=$rs["Username"]; 
                   } 
	        $smsg ="Successfully Logged In";	   
		
			 }
            else
            {
                $fmsg="Something is wrong";
            }
	
	}
	
	if(!empty($password && $username))
		$flag=1;
?>				
<html>
<head>
<link rel="stylesheet" type="text/css" href="forp.css">
</head>
<body>

<form method="POST">
<div class="split1 left">
<table>
<tr>
<td>User Name</td>
<td><input type="text" name="uname" value="<?php if($flag==1)echo $username ?>" ></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?php if($flag==1)echo $password  ?> "></td>
</tr>
</table>
<br>
<button type="button" name="signin">SIGN IN</button><br><br>
</form>
</div>

<form method="POST">
<div  class="split3 center ab">OR</div>
<div class="split2 right">

<span class="ab">Security Question<br></span>
<div class="ac">User Name</div>
<input type="text" name="uname"><br><br>
<select name="que" class="ac" required>
<option value="pet">Favourite Pet</option>
<option value="book" >Favourite Book</option>
<option value="chocolate" >Favourite Chocolate</option>
<option value="movie" >Favourite Movie</option>
</select>
<br><br>
<input type="text" name="ans"><br><br>
<button type="submit" name="getp">GET PASSWORD</button>
</div>
</form>

<?php if(isset($smsg)){ ?><div   class="alert alert-success ad" role="alert"> <?php  header( "refresh:3; url=journey.php" ); echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div  class="alert alert-danger ad" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	 

			
			
	  </body>

</html>
