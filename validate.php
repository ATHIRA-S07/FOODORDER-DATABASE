<?php
error_reporting(0);
$con=mysqli_connect('127.0.0.1','root','','foodcourt');
if(!$con)
{
	echo 'Not connected to server';
}

if(isset($_POST['create'])){
	echo isset($_POST['create']);
	$NAME=$_POST['NAME'];
	$PHONE=$_POST['PHONE'];
	$EMAILID=$_POST['EMAILID'];
	$FOODNAME=$_POST['FOODNAME'];
	$ADDRESS=$_POST['ADDRESS'];
	
	$sql="insert into orders(NAME,PHONE,EMAILID,FOODNAME,ADDRESS) Values ('NAME','$PHONE','$EMAILID','$FOODNAME','$ADDRESS')";
	$run=mysqli_query($con,$sql) or die (mysqli_error());
	if($run){
	   echo "Order successful";
	   
	}
}
	else
	{
	echo " Order unsuccessful";
	}

header("refresh:2;url=main.php");
?>