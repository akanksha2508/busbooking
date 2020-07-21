<?php
require('connect.php');

session_start();
$ins="INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`)VALUES('".$_SESSION['user']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id=$id";


mysqli_query($connection,$ins) or die(mysqli_error());
mysqli_query($connection,$upd) or die(mysqli_error());

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	header('location: debit.php');

?>