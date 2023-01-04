<?php

require_once "database.php";

class Category extends Database{

  function getCategory(){

    # create the query to all data in the DB
    $sql = "SELECT * FROM `category`";
    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function getCategorySelect($category_id){

    # create the query to all data in the DB
    $sql = "SELECT * FROM `category` WHERE `category_id`=$category_id";
    if($result=$this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function createCategory($category_name){

    # create the query to all data in the DB
    $sql = "INSERT INTO `category`(`category_name`) VALUES ('$category_name')";
    if($this->conn->query($sql)){
      header("location:../views/category.php");
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function deleteCategory($category_id) {

    $sql="DELETE FROM `category` WHERE category_id=$category_id";
    
      if($this->conn->query($sql)){
        header("location:../views/category.php");
        // why is need
        exit;
      }else{
        die("Error deleting user:".$this->conn->error);
      }
    }

    function updateCategory($category_name,$category_id) {

      $sql="UPDATE `category` SET `category_name`='$category_name' WHERE category_id=$category_id";
      
        if($this->conn->query($sql)){
          header("location:../views/category.php");
          // why is need
          exit;
        }else{
          die("Error deleting user:".$this->conn->error);
        }
      }

      function getTime_recordings(){
        $sql = "SELECT * FROM `category`";
        if($result=$this->conn->query($sql)){
          return $result->fetch_assoc();
        }else{
          die("Error retrieving users:".$this->conn->error);
        }
      }
  
      function update_time_recordings($category_id,$daily_time){
        $sql = "UPDATE `category` SET `total_time`=total_time+'$daily_time'  WHERE category_id=$category_id";
        if($result=$this->conn->query($sql)){
          header("location:../views/time_recordings.php");
        }else{
          die("Error retrieving users:".$this->conn->error);
        }
      }

      function reset_time_recordings($category_id){
        $sql = "UPDATE `category` SET `total_time`='0'  WHERE category_id=$category_id";
        if($result=$this->conn->query($sql)){
          header("location:../views/time_recordings.php");
        }else{
          die("Error retrieving users:".$this->conn->error);
        }
      }
}