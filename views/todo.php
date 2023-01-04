<?php
session_start();
include "../classes/category.php";
$category = new Category;
$categories_list=$category->getCategory();

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
<nav class="navbar navbar-expand-sm navbar-dark bg-primary px-4">
  <div class="collapse navbar-collapse text-center">
    <ul class="navbar-nav">
      <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
      <li><a href="todo.php" class="nav-link">To do</a></li>
      <li><a href="category.php" class="nav-link">Category</a></li>
      <li><a href="user.php" class="nav-link">User</a></li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <!-- need add a tag-->
    <li class="nav-item"><a href="profile.php" class="nav-link"><i class="fa-solid fa-user"></i> Welcome <?= $_SESSION['username'] ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>

    </ul>
  </div>

</nav>

<main class="container">
  <div class="mx-auto">
    <div class="text-center bg-white border-0">
    <h2 class="display-2"><i class="fa-sharp fa-solid fa-circle-plus"></i> Add To do</h2>
  </div>
    <form action="../actions/todo.php" method="post">
      <div class="w-50 mx-auto">
        <input type="text" name="todo_title" id="todo_title" class="border-top-0 border-start-0 border-end-0 form-control" placeholder="TITLE" required autofocus>
        <select name="category_id" id="category_id" class="mt-3 form-select" >
        <option value="" hidden>Select category</option>
          <?php
          while($category_row = $categories_list->fetch_assoc()){
          // why it need category_id
          echo "<option value='".$category_row['category_id']."'>".$category_row['category_name']."</option>";
          }
          ?>
        </select>
        <input type="number" name="todo_priority" id="todo_priority" class="mt-3 border-top-0 border-start-0 border-end-0 form-control" placeholder="PRIORITY" required>
        <input type="text" name="todo_deadline"  id="todo_deadline" onfocus="this.type='date'" onfocusout="this.type='text'" placeholder="DEADLINE"  class="mt-3 border-top-0 border-start-0 border-end-0 form-control"  required>
        
        
        <div class="d-grid">
        <button type="post" class="mt-3 btn btn-dark bg-dark" name="btn_post">POST</button>
        </div>
      </div>
    </form>
  </div>
</main>

  
</body>
</html>