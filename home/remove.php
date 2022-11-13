<?php
session_start();
$cart=$_SESSION['cart'];
unset($_SESSION['cart']);

$pid=$_GET["pid"];


foreach($cart as $key => $value)
{


       if($value==$pid)
       {
        unset($cart[$key]);
       }
}

$_SESSION['cart']=$cart;
header("Location: cart.php");


?>

