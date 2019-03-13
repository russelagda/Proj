<?php
$uname=$_POST['uname'];
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","","login");
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `uname`='$uname' && `password` ='
$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	header("refresh:2;url=welcome.php");
}
else
{
	echo "incorrect username or password";
	header("refresh:1;url=index.php");
}



?>








