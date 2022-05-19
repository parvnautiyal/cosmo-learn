<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'cosmolearndb');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$name=
$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$password1=$_POST['password1'];
$q="insert into usertable (name,username,email,phone,dob,password) values ('$name','$username','$email',$phone,'$dob','$password1')";
mysqli_query($con,$q);
mysqli_close($con);
header('location:http://localhost/cosmolearn/home.php');
?>