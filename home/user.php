<?php
if(!session_id())session_start();
error_reporting(0);

class User
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

function addition($name,$gender,$email,$phone,$address,$userid,$password)
{
    $con=$this->connection();
    $query="INSERT INTO `user`( `name`, `gender`, `email`, `phone`, `address`) VALUES ('$name','$gender','$email','$phone','$address')";
    if ($con->query($query) === TRUE) {
        $query="SELECT `userid` FROM `user` WHERE `email` LIKE '$email' AND `phone` LIKE '$phone'";
        $result = $con->query($query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $id=$row["userid"];
        $query="INSERT INTO `credentials`(`id`, `username`, `password`) VALUES ('$id','$userid','$password')";
        if($con->query($query)===TRUE)
        {
            return TRUE;
        }
        else{
            return false;
        }
        } 
      else {
        return false;
      }
    }

function update($name,$gender,$email,$phone,$address,$userid)
{
    $con=$this->connection();
    print_r($_SESSION);
    $query="UPDATE `user` SET `name`='$name',`gender`='$gender',`email`='$email',`phone`='$phone',`address`='$address' WHERE `userid`='$userid'";
    echo $query;
    if ($con->query($query) === TRUE) {
        return TRUE;
    }
    else{
       return FALSE;
    }

}
function delete($id)
{
    $con=$this->connection();
    $query="DELETE FROM `user` WHERE userid='$id'";
    if ($con->query($query) === TRUE) {
        $query="DELETE FROM `credentials` WHERE id='$id'";
        echo $query;
        if($con->query($query) === TRUE)
        {
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
function ViewUser($id)
{
    $conn=$this->connection();
    $sql="SELECT * FROM `user` WHERE userid='$id'";
    $result = $conn -> query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row;
}
}





?>


