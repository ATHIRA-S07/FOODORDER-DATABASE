<?php
session_start();
error_reporting(0);
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'foodcourt');

$PHONE =$_POST['PHONE'];
$PASSWORD=$_POST['PASSWORD'];
$sql="select * from user where PHONE='$PHONE' && PASSWORD='$PASSWORD'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1)
{ 
	echo "Login Successful";
	header('refresh:2;url=main.php');

}
else
{
	echo "Login not Successful try again!!!!";
	header('refresh:2;url=login.php');
}
?>