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
  <div class="bg-dark">
    <main class="container">
      <div class="card mx-auto bg-dark text-white">
      
        <div class="card-header text-center">
        <h1>Registration</h1>
        </div>

        <div class="card-body text-start w-50 mx-auto">
          <form method="post" action="../actions/register.php">
            <div class="row">
                <div class="col">
                <label for="first_name" class="form-label d-block">First name<span class="text-danger">*</span></label>
                <input type="text" name="first_name" id="first_name" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required autofocus>
                </div>
                <div class="col">
                <label for="" class="form-label d-block">Last name<span class="text-danger">*</span></label>
                <input type="text" name="last_name"  id="last_name" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required>
                </div>
            </div>
                <label for="address" class="form-label d-block mt-3">Address</label>
                <input type="text" name="address" id="address" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required>

                <label for="contact_number" class="form-label d-block mt-3">Contact number<span class="text-danger">*</span></label>
                <input type="text" name="contact_number" id="contact_number" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required>

                <label for="username" class="form-label d-block mt-3">Username<span class="text-danger">*</span></label>
                <input type="text" name="username" id="username" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required>

                <label for="password" class="form-label d-block mt-3">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" required>
          
            <div class="row mt-4">
                <div class="col d-grid">
                <button type="submit" class="btn btn-secondary" name="btn_register">Register</button>
                </div>
                <div class="col d-grid">
                <a href="login.php" class="btn btn-secondary">Sign in</a>
                </div>
            </div>
          </form>    
        </div>
      </div>
    </main>
  </div>

  
</body>
</html>