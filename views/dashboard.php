<?php
session_start();

include "../classes/todo.php";
$todo = new Todo;
$todo_list=$todo->getTodo();

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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-4">
  <div class="collapse navbar-collapse text-center">
    <ul class="navbar-nav">
      <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
      <li><a href="todo.php" class="nav-link">To do</a></li>
      <li><a href="category.php" class="nav-link">Category</a></li>
      <li><a href="user.php" class="nav-link">User</a></li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <!-- need add a tag-->
    <li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fa-solid fa-user"></i> Welcome <?= $_SESSION['username'] ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>

    </ul>
  </div>

</nav>



<div class="container-fluid bg-danger py-3" >
  <h2 class="display-3 text-white"><i class="fa-sharp fa-solid fa-user-gear"></i> Dashboard</h2>
</div>

<div class="container mt-5">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>title</th>
            <th>category</th>
            <th>priority</th>
            <th>deadline</th>
            <th></th>
    
          </tr>
        </thead>
        <tbody>
          <?php
          while($todo_detail=$todo_list->fetch_assoc()){
            ?>
          

          <tr>
            <td><?= $todo_detail['todo_title']?></td>
            <td><?= $todo_detail['category_name']?></td>
            <td><?= $todo_detail['todo_priority']?></td>
            <td><?= $todo_detail['todo_deadline']?></td>
             <!-- font awesome didn't work -->
            <td>
                <a href="edit-todo.php?todo_id=<?= $todo_detail['todo_id']?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
                <a href="../actions/delete-todo.php?todo_id=<?= $todo_detail['todo_id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          <?php }
          ?>
          <?php 
          ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>  
        </tbody>   
      </table>  
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col d-grid">
      <a href="todo.php" class="btn btn-primary fs-2 py-5"><i class="fa-sharp fa-solid fa-circle-plus"></i> Add To do</a>
    </div>
    <div class="col d-grid">
      <a href="category.php" class="btn btn-success fs-3 py-5"><i class="fa-sharp fa-solid fa-folder-plus"></i> Add Category</a>
    </div>
    <div class="col d-grid">
      <a href="user.php" class="btn btn-warning fs-2 text-white py-5"><i class="fa-sharp fa-solid fa-user-plus"></i> Add User</a>
    </div>
    <div class="col d-grid">
      <a href="time_recordings.php" class="btn btn-info fs-3 text-white py-5"><i class="fa-solid fa-user-clock"></i>  Time_record</a>
    </div>
    <div class="col d-grid">
      <a href="result_graph.php" class="btn btn-secondary fs-3 text-white py-5"><i class="fa-solid fa-square-poll-vertical"></i> Result_graph</a>
    </div>
  </div>
</div>
  
</body>
</html>