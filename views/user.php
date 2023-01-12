<?php
  session_start();
  include "../classes/user.php";
  $user= new User;
  $user_result=$user->getUser();
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
    <li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fa-solid fa-user"></i> Welcome <?= $_SESSION['username'] ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>

    </ul>
  </div>

</nav>



<form action="../actions/user.php" method="post">
<main class="container w-50 text-center">
  <div class="mt-3 display-2"><i class="fa-sharp fa-solid fa-user-plus"></i> Add User</div>
 
  <div class="mt-2 row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="first_name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="last_name">
    </div>
  </div>
  <div class="mt-2 row">
    <div class="col">
    <input type="text" class="form-control" placeholder="Contact Number" name="contact_number">
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="Address" name="address">
    </div>
  </div>

  <div class="mt-2 d-grid">
  <input type="text" placeholder="Username" class="form-control" name="username">
  </div>
  <div class="mt-2 d-grid">
  <input type="password" placeholder="Password" class="form-control" name="password">
  </div>

  <div class="mt-2 d-grid">
  <button type="post" class="mt-2 btn btn-warning" name="btn_add">ADD</button>
  </div>

</main>
</form>

<table class="table mx-auto mt-5 w-50">
  <thead class="bg-dark text-white">
    <div class="row">
      <tr>
        <th>USER ID</th>
        <th>FULL NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT NUMBER</th>        
        <th>USERNAME</th>
        <th></th>
        <th></th>
      </tr>
    </div>
  </thead>
  <tbody>
    <?php
    while($user_row=$user_result->fetch_assoc()){ 
    ?>
    <div class="row">
      <tr>
        <td><?= $user_row['user_id']?></td>
        <td><?= $user_row['first_name']?><?= $user_row['last_name']?></td>
        <td><?= $user_row['address']?></td>
        <td><?= $user_row['contact_number']?></td>
        <td><?= $_SESSION['username'] ?></td>
        <td><a href="edit-user.php?user_id=<?= $user_row['user_id'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a></td>
        <td><a href="../actions/delete-user.php?user_id=<?= $user_row['user_id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
      </tr>
    </div>
    <?php }

    ?>
  
  </tbody>
  
</table>

  
 
</body>
</html>