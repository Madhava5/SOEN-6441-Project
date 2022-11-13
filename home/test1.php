<?php
session_start();
// error_reporting(0);
$conn=mysqli_connect("localhost","root","","test");
function View($id){
   $conn=mysqli_connect("localhost","root","","test");
   $sql="SELECT * FROM `products` WHERE pid='$id'";
   echo $sql;
  $result = $conn->query($sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   return $row;
}


			
?>