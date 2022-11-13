<?php
session_start();

if(isset($_SESSION['userid']))
{
    unset($_SESSION['userid']);
    unset($_SESSION['cart']);
    header("Location: index.php");
   
}

?>