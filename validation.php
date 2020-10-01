<?php

session_start();


$con=mysqli_connect('localhost','root');

if($con)
{
	echo "connected successfull";
}
else{
	echo "connection failed";
}

mysqli_select_db($con, 'facemash');


$name=$_POST['user'];
$pass=$_POST['password'];

$q= "select * from facemashuserdata where username= '$name'  && password='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
 
if($num==1)
{
	$_SESSION['username']=$name;
	header('location:home.php');
}
else{
	header('location:login.php');
}

?>