<?php
session_start();

$cart=$_SESSION['cart'];
unset($_SESSION['cart']);
$pid=$_GET['pid'];
print_r($pid);
array_push($cart,$pid);
$_SESSION['cart']=$cart;
print_r($_SESSION['cart']);
header("Location: shop.php");

?>