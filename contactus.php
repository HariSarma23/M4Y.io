<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'm4ycontactusdata');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['number'];
$message = $_POST['message'];

$query = " insert into contactusdata (name,email,number,message)
 values('$name', '$email', '$number', '$message'); ";

 echo "$query";
 
 mysqli_query($con, $query);

 header('location: thankyou.php');

?>