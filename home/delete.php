<?php
session_start();
// error_reporting(0);
require_once('user.php');
$id=$_SESSION['userid'];
echo $id;
$user=new User();
if(($user->delete($id))===TRUE)
{
    header("Location: logout.php");
}
else{
    header("Location: shop.php?q=error");
}

?>