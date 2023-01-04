<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- how can I change color to black all bg -->
  <div class="bg-success">
    <main class="container">
      <div class="card mx-auto bg-success text-white">
      
        <div class="card-header text-center bg-success text-dark">
        <h1>Login</h1>
        </div>

        <div class="card-body text-start w-50 mx-auto">
          <form method="post" action="../actions/login.php">

                <label for="username" class="form-label d-block mt-3 text-dark">Username</label>
                <input type="text" name="username" id="username" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="username" required>

                <label for="password" class="form-label d-block mt-3 text-dark">Password</label>
                <input type="password" name="password" id="password" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="password" required>

                <div class="col d-grid mt-3">
                <button type="submit" class="btn btn-dark" name="btn_Enter">Enter</button>
                </div>
          
            <div class="row mt-4">
                <div class="col d-grid">
                  <a href="register.php" class="btn btn-dark">Create an account</a>
                </div>
                <div class="col d-grid">
                <a href="recover.php" class="btn btn-dark">Recover account</a>
                </div>
            </div>
          </form>    
        </div>
      </div>
    </main>
  </div>

  
</body>
</html>