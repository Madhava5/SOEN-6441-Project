<?php
session_start();
// error_reporting(0);
require_once('user.php');

$name=$_POST['username'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$phone= $_POST['phone'];
$address=$_POST['address'];
$id=$_SESSION['userid'];

$user=new User();
if($user->update($name,$gender,$email,$phone,$address,$id)===TRUE)
{
    header("Location: shop.php");
    // echo "true";
}
else{
    header("Location: profileview.php?q=error");
}

?>