<?php

session_start();
header('location:login.php');

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
	echo "duplicate data";
}
else{
	$qy= "insert into facemashuserdata (username, password) values('$name', '$pass')" ;
	mysqli_query($con,$qy);
}

?>