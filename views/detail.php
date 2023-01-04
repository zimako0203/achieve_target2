<?php
session_start();
include "../classes/todo.php";
$todo= new Todo;
$todo_list=$todo->getTodoSelect($_GET['todo_id']);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container w-50">
  <h1>Title</h1>
  <h2><?= $todo_list['todo_title'];?></h2>

  <h1>Achievement rate</h1>
  <h2><?= $todo_list['need_time'];?>/<?= $todo_list['amount_time'];?>*100</h2>

  <div class="row">
    <h1>Amount of time<?= $todo_list['amount_time'];?></h1>
    <span>hour</span>

    <h1>Rest of time<?= $todo_list['need_time'];?>-<?= $todo_list['amount_time'];?></h1>
    <span>hour</span>
  </div>
  <h1>time to deadline</h1>
  <h2></h2>

</div>
  
</body>
</html>