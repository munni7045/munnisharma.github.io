<?php

$con = mysqli_connect('localhost','root');

if($con){
  echo "conection successful";
}else {
  echo "no connection";
}

mysqli_select_db($con,'munniuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userdata (user, email, contact, comment) 
VALUES ('$user','$email','$mobile','$comment') ";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>











