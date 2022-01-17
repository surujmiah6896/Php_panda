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

  <title>My Registration Page</title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="lib/select2/css/select2.min.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">My <span class="tx-info tx-normal">admin</span></div>
      <br>
      <?php if (isset($_SESSION['email_error'])) : ?>
        <div class="alert alert-danger">
          <?= $_SESSION['email_error'] ?>
        </div>
      <?php endif; ?>

      <!-- <div class="tx-center mg-b-60">Professional Admin Template Design</div> -->
      <form method="POST" action="registraion_post.php">

        <div class="form-group">
          <input type="text" class="form-control <?= (isset($_SESSION['name_error'])) ? 'is-invalid' : '' ?> " placeholder="Enter your Name" name="first_name" value=<?= isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '' ?>>
          <?php if (isset($_SESSION['name_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['name_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" class="form-control <?= (isset($_SESSION['email_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your Email" name="email" value=<?= isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '' ?>>
          <?php if (isset($_SESSION['email_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['email_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control <?= (isset($_SESSION['password_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your password" name="password" value=<?= isset($_SESSION['old_password']) ? $_SESSION['old_password'] : '' ?>>
          <?php if (isset($_SESSION['password_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['password_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control <?= (isset($_SESSION['con_password_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your Conform password" name="con_password">
          <?php if (isset($_SESSION['con_password_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['con_password_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->
        <div class="form-group">
          <label for="">Gender:</label>
          <label class="">

            <!-- <input type="radio" name="gender" value="male "> -->
            <input type="radio" name="gender" value="male" <?= isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'male' ? 'checked' : '' ?>>
            <span>Male</span>
          </label>
          <label>
            <input type="radio" name="gender" value="female" <?= isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'female' ? 'checked' : '' ?>>
            <span>Female</span>
          </label>
          <label>
            <input type="radio" name="gender" value="others" <?= isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'others' ? 'checked' : '' ?>>
            <span>Others</span>
          </label>
          </label>
          <?php if (isset($_SESSION['gender_error'])) : ?>
            <br><small class="text-danger"><?= $_SESSION['gender_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->



        <button type="submit" class="btn btn-info btn-block">Submit</button>
      </form>
      <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Log In</a>
      </div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="../lib/jquery/jquery.js"></script>
  <script src="../lib/popper.js/popper.js"></script>
  <script src="../lib/bootstrap/bootstrap.js"></script>
  <script src="../lib/select2/js/select2.min.js"></script>
  <script>
    $(function() {
      'use strict';

      $('.select2').select2({
        minimumResultsForSearch: Infinity
      });
    });
  </script>

</body>

</html>
<?php
session_unset();
?>