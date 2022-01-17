<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Login</title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Log <span class="tx-info tx-normal">In</span>
      </div>

      <?php if (isset($_SESSION['register_seccess'])) : ?>
        <div class="alert alert-success">
          <?= $_SESSION['register_seccess'] ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['password_login_error'])) : ?>
        <div class="alert alert-danger">
          <?= $_SESSION['password_login_error'] ?>
        </div>
      <?php endif; ?>
      <form action="login_post.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your email" name="email" value="<?= isset($_SESSION['register_email']) ? $_SESSION['register_email'] : '' ?>">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">

          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Log In</button>
      </form>

      <div class="mg-t-60 tx-center">Not yet a member? <a href="register.php" class="tx-info">Register Now</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="lib/jquery/jquery.js"></script>
  <script src="lib/popper.js/popper.js"></script>
  <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>

<?php
session_unset();
?>