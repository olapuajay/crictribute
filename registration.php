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
    .alert-danger {
      font-size: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
      if(isset($_POST["submit"])) {
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();
        if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
          array_push($errors, "All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($errors, "Email is not valid");
        }
        if(strlen($password) < 8) {
          array_push($errors, "password must be atleast 8 characters long");
        }
        if($password !== $passwordRepeat) {
          array_push($errors, "Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if($rowCount > 0) {
          array_push($errors, "Email already exists!");
        }
        if(count($errors) > 0) {
          foreach($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
          }
        }
        else {
          // Insert data into database
          require_once "database.php";
          $sql = "INSERT INTO users(full_name, email, password) VALUES(?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
          if($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You've registered successfully.</div>";
          } else {
            die("Something went wrong!");
          }
        }
      }
    ?>
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