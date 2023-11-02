<html>
<head>
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
    .btn-color {
      background-color: #1049b4;
      color: rgb(255, 255, 255);

    }

    .profile-image-pic {
      height: 200px;
      width: 200px;
      object-fit: cover;
    }

    body {
      background-color: #e0e0e0;
    }

    .cardbody-color {
      background-color: #ffffff;
    }

    a {
      text-decoration: none;
    }
  </style>
  <?php
  include('includes/dbconnection.php');
  ?>

  <?php

$passErr = $emailErr = "";
$password = $email = "";
if (isset($_POST['submit'])) {
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  }

    if (empty($_POST['password'])) {
      $passErr = 'Password is required';
    } else {
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    $_SESSION['username'] = $email;
  }
  echo "<script>console.log('$email'+'$password')</script>";

  ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3">
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <div class="text-center">
              <img src="assets/img/bharuch-removebg-preview.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>
            <?php
            if (isset($_POST['submit'])) {
              $sql = "SELECT * from userlogin WHERE email='$email' && password='$password';";
              $result = $conn->query($sql);
              if ($result->num_rows == 1) {
                header("Location: dashboard.php");
                exit();
              } else {
                echo '<h6 style="color: red; text-align: center;">Please Check Your Email & Password</h6>';
              }
            }
            ?>

            <div class="mb-3">
              <input type="email" class="form-control" id="Username" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="text-center col-sm-4 offset-sm-4"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="submit">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="signup.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>