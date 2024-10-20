<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      padding: 50px;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 50px;
      box-shadow: rgb(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .form-group {
      margin-bottom: 30px;
    }
    @media screen and (max-width: 500px) {
      body {
        padding: 15px;
      }
      .container {
        padding: 15px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="registration.php" method="POST">
      <h1 class="text-center">REGISTER</h1>
      <hr class="hr" />
      <div class="form-group">
        <input type="text" name="fullname" class="form-control" placeholder="Full Name">
      </div>
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <input type="password" name="repeat_password" class="form-control" placeholder="Confirm Password">
      </div>
      <div class="form-btn">
        <input type="submit" name="submit" class="btn btn-primary w-100" value="Register">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="JS/index.js"></script>
</body>
</html>