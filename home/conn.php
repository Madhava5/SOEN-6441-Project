<?php
class Conn
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
}
?>