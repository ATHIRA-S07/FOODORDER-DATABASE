<?php
error_reporting(0);
$con=mysqli_connect('127.0.0.1','root','','foodcourt');
if(!$con)
{
	echo 'Not connected to server';
}

if(isset($_POST['create'])){
	echo isset($_POST['create']);
	$FIRSTNAME=$_POST['FIRSTNAME'];
	$LASTNAME=$_POST['LASTNAME'];
	$PHONE=$_POST['PHONE'];
	$EMAILID=$_POST['EMAILID'];
	$PASSWORD=$_POST['PASSWORD'];
	
	$sql="insert into user(FIRSTNAME,LASTNAME,PHONE,EMAILID,PASSWORD) Values ('$FIRSTNAME','$LASTNAME','$PHONE','$EMAILID','$PASSWORD')";
	$run=mysqli_query($con,$sql) or die (mysqli_error());
	if($run){
	   echo "Registration successful";
	   
	}
}
	else
	{
	echo " Registration unsuccessful";
	}

header("refresh:2;url=login.php");
?>