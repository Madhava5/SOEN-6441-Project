<?php
session_start();
// error_reporting(0);
require_once('user.php');

$userid= $_POST['UserName'];
$password= $_POST['password'];
$name= $_POST['firstName'];
$address= $_POST['Address'];
$phone= $_POST['phoneNo'];
$email= $_POST['email'];
$gender= $_POST['radio'];
$user=new User();
if($user->addition($name,$gender,$email,$phone,$address,$userid,$password)===TRUE)
{
    header("Location: index.php?q1=success");
}
else{
    header("Location: registration.php?q=error");
}

?>
