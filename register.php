<!DOCTYPE html>
<html lang="en">
<?php require_once('_koneksi.php')?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WEB SUARA RAKYAT</title>
  <!-- plugins:css -->
  <?php require_once('_css.php')?>
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h4>Web Suara Rakyat</h4>
              <h6 class="font-weight-light">Registrasi Akun Rakyat</h6>
              <form class="pt-3" action="auth_model.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nik" placeholder="NIK">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="telp" placeholder="No. Telp">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-primary rounded-pill m-2" name="register">REGIST</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
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
  <?php require_once('_js.php')?>
  <!-- endinject -->
</body>

</html>
