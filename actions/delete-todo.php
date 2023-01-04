<?php
include_once "../classes/todo.php";

$todo_id = $_GET['todo_id'];

$todo= new Todo;

$todo->deleteTodo($todo_id);
?>