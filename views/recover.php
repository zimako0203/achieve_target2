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
        <h1>INQUIRY FORM</h1>
        </div>

        <div class="card-body text-start w-50 mx-auto">
          <form method="post" action="../actions/login.php">

                <label for="full_name" class="form-label d-block mt-3 text-dark">full name</label>
                <input type="text" name="full_name" id="full_name" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="full name" required>

                <label for="mail_address" class="form-label d-block mt-3 text-dark">mail address</label>
                <input type="text" name="mail_address" id="mail_address" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="mail address" required>

                <label for="phone_number" class="form-label d-block mt-3 text-dark">phone number</label>
                <input type="text" name="phone_number" id="phone_number" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="phone number" required>

                <label for="content" class="form-label d-block mt-3 text-dark">content</label>
                <textarea name="" id="" cols="30" rows="10" class="bg-dark border-top-0 border-start-0 border-end-0 form-control text-white" placeholder="content" required></textarea>

                <div class="col d-grid mt-3">
                <button type="submit" class="btn btn-dark" name="btn_Enter">Submit</button>
                </div>
          
          </form>    
        </div>
      </div>
    </main>
  </div>

  
</body>
</html>

  
</body>
</html>