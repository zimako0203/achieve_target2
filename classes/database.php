<?php

class Database{
  // private $server_name="localhost";
  // private $username="root";
  // private $password="root";
  // private $db_name="achieve_target";
  private $server_name="us-cdbr-east-06.cleardb.net";
  private $username="b66f6c074b40de";
  private $password="bc303af8";
  private $db_name="heroku_b987e74f6957046";
  protected $conn;

  public function __construct(){
    $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_name);

    if($this->conn->connect_error){
      die("Unable to connect to database". $this->db_name.":".$this->conn->connect_error);
    }
  }

}