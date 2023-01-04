<?php

require_once "database.php";

class User extends Database{

  function createUser($first_name,$last_name,$contact_number,$address,$username,$password) {

    # create the query to all data in the DB
    $sql = "INSERT INTO `account` (`username`, `password`) VALUES ('$username', '$password')";
    # condition to execute the SQL query
    if($this->conn->query($sql)){
      $account_id = $this->conn-> insert_id;
      $sql_user = "INSERT INTO `user` (`first_name`, `last_name`, `contact_number`, `address`,account_id) VALUES ('$first_name', '$last_name','$contact_number', '$address',$account_id)";
      if($this->conn->query($sql_user)){
        header("location:../views/user.php");
    } else {
        echo("Error in registering the user ".$this->conn->error);
    }
    }else{
      die("Error in registering the user ".$this->conn->error);
    }

}

function updateUser($first_name,$last_name,$contact_number,$address,$username,$password) {

  # create the query to all data in the DB
  $sql = "UPDATE `account` SET `username`='$username',`password`='$password'";
  # condition to execute the SQL query
  if($this->conn->query($sql)){
    $account_id = $this->conn-> insert_id;
    $sql_user = "UPDATE `user` SET `first_name`='$first_name',`last_name`='$last_name',`contact_number`='$contact_number',`address`='$address',`account_id`='$account_id'";
    if($this->conn->query($sql_user)){
      header("location: ../views/user.php");
  } else {
      echo("Error in registering the user ".$this->conn->error);
  }
  }else{
    die("Error in registering the user ".$this->conn->error);
  }

}


function login($username,$password) {

  $sql="SELECT * FROM account WHERE username = '$username'";

  $result = $this->conn->query($sql);
  if($result->num_rows==1){
    $account_details=$result->fetch_assoc();
    if(password_verify($password,$account_details['password'])){
      session_start();

      $_SESSION['account_id']= $account_details['account_id'];
      $_SESSION['username']= $account_details['username'];

      header("location:../views/dashboard.php");
      exit;
    }else{
      die("Password is incorrect.");
    }
  }else{
    die("Username not found");
  }
  }

  function getUser() {

    # create the query to all data in the DB
    $sql = "SELECT * FROM `user`";
    # condition to execute the SQL query
    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function getUserSelect($user_id) {

    # create the query to all data in the DB
    $sql = "SELECT * FROM `user` WHERE `user_id`=$user_id";
    # condition to execute the SQL query
    if($result=$this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function deleteUser($user_id) {

    $sql="DELETE FROM `user` WHERE user_id=$user_id";
    
      if($this->conn->query($sql)){
        header("location:../views/user.php");
        // why is need
        exit;
      }else{
        die("Error deleting user:".$this->conn->error);
      }
    }
  
}