<?php
if(!session_id()) session_start();
error_reporting(0);
class Perchages
{
function connection()
{
  $con=mysqli_connect("localhost","root","","test");
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
  }
  return $con;

}
function Perchage($pid)
{
    $conn=$this->connection();
    $userid=$_SESSION['userid'];
    $sql="INSERT INTO `perchages`( `pid`, `userid`, `datetime`) VALUES ('$pid','$userid',sysdate())";
    if ($conn->query($sql) === TRUE) {
        return true;
    }
    else{
        return false;
    }
}
function View($pid){
    $conn=$this->connection();
    $sql="SELECT * FROM `products` WHERE pid='$pid'";
	$result = $conn->query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row;
}
function Perchagesview($id)
{
    $conn=$this->connection();
    $sql=$sql = "SELECT products.title, products.price, products.discountPercentage,perchages.datetime FROM perchages CROSS JOIN products WHERE products.pid=perchages.pid AND perchages.userid='$id'";
	$result = $conn->query($sql);
    return $result;
}
function ViewProducts()
{
    $conn=$this->connection();
    $sql="SELECT * FROM `products` ";
    $result = $conn -> query($sql);
    return $result;

}
function ViewItem($pid)
{
    $conn=$this->connection();
    $sql="SELECT * FROM `products` WHERE pid=$pid";
    // print_r($sql);
    $result = $conn -> query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // print_r($row);
    return $row;
}

}

$perchage=new Perchages();
// $row=$perchage->View(3);
// printf($row);

?>