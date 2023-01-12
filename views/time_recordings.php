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

<header>
  <div class="container-fluid bg-info text-white p-4">
    <h2 class="display-2"><i class="fa-solid fa-user-clock"></i>  Time_record</h2>
  </div>
</header>

<table class="table mx-auto mt-5 w-50">
  <thead class="bg-dark text-white">
    <div class="row">
      <tr>
        <th>CATEGORY NAME</th>
        <th>Daily time(min)</th>
        <th>Update</th>
        <th>Reset</th>
        <th>Total time(min)</th>
      </tr>
    </div>
  </thead>
  <tbody>
    <?php
    while($category_row=$categories_list->fetch_assoc()){ 
    ?>
   

    <div class="row">      
      <tr>
        <td><?= $category_row['category_name']?></td>
        <form action="../actions/time_recordings.php?category_id=<?= $category_row['category_id']?>" method="post">
        <td><input type="number" name="daily_time" id="daily_time" class="" placeholder="DAILY TIME"></td> 
        <td> <button type="post" class="btn btn-dark bg-warning" name="btn_post">UPDATE</button></td>
        </form>
        <td><a href="../actions/Reset_time_recordings.php?category_id=<?= $category_row['category_id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
        <td><?= $category_row['total_time']?></td>
      </tr>        
    </div>
    
    <?php }

    ?>
   

  
  </tbody>
  
</table>

  
</body>
</html>