<?php
session_start();
// error_reporting(0);
class Login
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

// Perform query
function login($username,$password){
  echo $username;
  echo $password;
 $con=$this->connection();
    $query="SELECT id FROM `credentials` WHERE username='$username' AND password='$password'";
    echo $query;
if ($result = mysqli_query($con,$query)) {
    print("inside if --");
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  printf ("%s\n", $row["id"]);
  if($row["id"]>0){
  $_SESSION['userid']=$row["id"];
  $_SESSION['cart']=[];
  header("Location: shop.php");
  }
  else{
    print("else a");
    header("Location: index.php?q=error");
  }

}
else{
   print("b");
    header("Location: index.php?q=error");
}
}

}

$userid= $_POST['username'];
$password= $_POST['password'];

$login = new Login();
$login->login($userid,$password);
// print_r($_SESSION);


?>