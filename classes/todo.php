<?php

require_once "database.php";

class Todo extends Database{

  function getTodo() {

    # create the query to all data in the DB
    $sql = "SELECT * FROM `todo` INNER JOIN category ON todo.category_id = category.category_id";
    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function getTodoSelect($todo_id) {

    # create the query to all data in the DB
    $sql = "SELECT * FROM `todo` WHERE `todo_id`=$todo_id";
    if($result=$this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function createTodo($todo_title,$todo_priority,$todo_deadline,$category_id) {

    # create the query to all data in the DB
    $sql = "INSERT INTO `todo`(`todo_title`, `todo_priority`, `todo_deadline`, `category_id`) VALUES ('$todo_title','$todo_priority','$todo_deadline','$category_id')";
    if($this->conn->query($sql)){
      header("location:../views/dashboard.php");
    }else{
      die("Error retrieving users:".$this->conn->error);
    }
  }

  function deleteTodo($todo_id) {

    $sql="DELETE FROM `todo` WHERE todo_id=$todo_id";
    
      if($this->conn->query($sql)){
        header("location:../views/dashboard.php");
        // why is need
        exit;
      }else{
        die("Error deleting user:".$this->conn->error);
      }
    }

    function updateTodo($todo_title,$todo_priority,$todo_deadline,$category_name,$todo_id) {

      $sql="UPDATE `todo` SET `todo_title`='$todo_title',`todo_priority`='$todo_priority',`todo_deadline`='$todo_deadline',`$category_name`='category_name' INNER JOIN category ON todo.category_id = category.category_id WHERE todo_id=$todo_id";
      
        if($this->conn->query($sql)){
          header("location:../views/dashboard.php");
          // why is need
          exit;
        }else{
          die("Error deleting user:".$this->conn->error);
        }
      }
}