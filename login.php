<!DOCTYPE html>
<html lang="en">
<?php require_once('_koneksi.php') ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <?php require_once('_css.php') ?>
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h4>Login </h4>
              <h6 class="font-weight-light"> Mau ngadu? Login dulu lah</h6>
              <form class="pt-3" action="auth_model.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="form-floating mb-4">
                  <select name="level" class="form-control">
                    <option value="rakyat">Masyarakat</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary rounded-pill m-2" name="login">LOGIN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php require_once('_js.php') ?>
  <!-- endinject -->
</body>

</html>