<?php
  session_start();
  include "../classes/user.php";
  $user= new User;
  $user_result=$user->getUserSelect($_GET['user_id']);
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
<nav class="navbar navbar-expand-sm navbar-dark bg-warning px-4">
  <div class="collapse navbar-collapse text-center">
    <ul class="navbar-nav">
      <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
      <li><a href="todo.php" class="nav-link">To do</a></li>
      <li><a href="category.php" class="nav-link">Category</a></li>
      <li><a href="user.php" class="nav-link">User</a></li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <!-- need add a tag-->
    <li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fa-solid fa-user"></i>Welcome <?= $_SESSION['username'] ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa-solid fa-user"></i>Log out</a></li>

    </ul>
  </div>

</nav>



<form action="../actions/edit-user.php?user_id=<?= $user_result['user_id'] ?>" method="post">
<main class="container w-50 text-start">
  <div class="mt-3 display-2">Add User</div>
 
  <div class="mt-2 row">
    <div class="col">
      <input type="text" class="form-control" value="<?=$user_result['first_name']?>" placeholder= "first name" name="first_name">
    </div>
    <div class="col">
      <input type="text" class="form-control" value="<?=$user_result['last_name']?>" placeholder= "last name" name="last_name">
    </div>
  </div>
  <div class="mt-2 row">
    <div class="col">
    <input type="text" class="form-control" value="<?=$user_result['contact_number']?>" placeholder= "contact number" name="contact_number">
    </div>
    <div class="col">
    <input type="text" class="form-control" value="<?=$user_result['address']?>" placeholder= "address" name="address">
    </div>
  </div>

  <div class="mt-2 d-grid">
  <input type="text" class="form-control" value="<?= $_SESSION['username'] ?>" placeholder= "username" name="username">
  </div>
  <div class="mt-2 d-grid">
  <input type="password" class="form-control" placeholder= "password" name="password">
  </div>

  <div class="mt-2 d-grid">
  <button class="mt-2 btn btn-warning" name="btn_add">ADD</button>
  </div>