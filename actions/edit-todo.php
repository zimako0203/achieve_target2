<?php

include_once "../classes/todo.php";


$todo_title = $_POST['todo_title'];
$todo_priority = $_POST['todo_priority'];
$todo_deadline = $_POST['todo_deadline'];
$category_id = $_POST['category_id'];
$todo_id = $_GET['todo_id'];

$todo= new Todo;

$todo->updateTodo($todo_title,$todo_priority,$todo_deadline,$category_id,$todo_id);

?>