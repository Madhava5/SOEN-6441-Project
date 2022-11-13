<?php
require("perchages.php");
$cart=$_SESSION['cart'];
$count=0;
foreach($cart as $key => $value)
{
    if(($perchage->Perchage($value))===TRUE)
    {
        $count++;
    }

}
if($count>0)
{
    unset($_SESSION['cart']);
    $_SESSION['cart']=[];
    header("Location: cart.php");
}
else
{
    header("Location: cart.php"); 
}
?>