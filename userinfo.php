<?php
    $con=mysqli_connect('localhost','root');
    if($con)
    {
        echo "connected successfully";
    }
    else{
        echo "connection failed";
    }

    mysqli_select_db($con, 'himanshudatabase');

    $user = $_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comment=$_POST['comment'];
 
    $query = "insert into userdata (user, email, mobile, comment) 
    values('$user','$email','$mobile','$comment')";

    mysqli_query($con, $query); 

    header('location:index.php');

?>