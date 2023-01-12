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
<nav class="navbar navbar-expand-sm navbar-dark bg-success px-4">
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

<main class="container">
  <div class="mx-auto">
    <div class="text-center bg-white border-0">
    <h2 class="display-2"><i class="fa-sharp fa-solid fa-folder-plus"></i> Add Category</h2>
  </div>
    <form action="../actions/category.php" method="post">
      <div class="w-50 mx-auto">
        <input type="text" name="category_name" id="category_name" class="border-top-0 border-start-0 border-end-0 form-control" placeholder="CATEGORY" required autofocus>
        <div class="d-grid">
        <button type="post" class="mt-3 btn btn-dark bg-dark" name="btn_post">POST</button>
        </div>
      </div>
    </form>
  </div>
</main>

<table class="table mx-auto mt-5 w-50">
  <thead class="bg-dark text-white">
    <div class="row">
      <tr>
        <th>CATEGORY NAME</th>
        <th></th>
        <th></th>
      </tr>
    </div>
  </thead>
  <tbody>
    <?php
    while($category_row=$categories_list->fetch_assoc()){ 
    ?>
    <div class="row">
      <form action="" method="post">
      <tr>
        <td><?= $category_row['category_name']?></td>
        <td><a href="edit-category.php?category_id=<?= $category_row['category_id']?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
        <a href="../actions/delete-category.php?category_id=<?= $category_row['category_id']?>" class="btn btn-danger" name="btn_delete"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      </form>
    </div>
    <?php }

    ?>

  
  </tbody>
  </form>
  
</table>

  
</body>
</html>