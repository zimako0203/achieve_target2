<?php

include_once "../classes/todo.php";

$todo_title = $_POST['todo_title'];
$todo_priority = $_POST['todo_priority'];
$todo_deadline = $_POST['todo_deadline'];
$category_id = $_POST['category_id'];

$todo= new Todo;

$todo->createTodo($todo_title,$todo_priority,$todo_deadline,$category_id);

?>