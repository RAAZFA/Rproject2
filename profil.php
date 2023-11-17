<?php $halaman = "profil";
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <?php require_once('_css.php') ?>
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once('_navbar.php') ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- To do section tab ends -->

      <!-- chat tab ends -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php require_once('_sidebar.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="container-fluid pt-4 px-4">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <h3>Detail Profil</h3>
            <br>
            <?php if ($_SESSION['level'] == "rakyat") { ?>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">NIK</div>
                <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['nik'] ?></div>
              </div>
            <?php } ?>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Nama</div>
              <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['nama'] ?></div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Username</div>
              <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['username'] ?></div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">privileges</div>
              <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['level'] ?></div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">telpon</div>
              <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['telp'] ?></div>
            </div>
            <br>
            <br>
            <h4>Profil <?= $_SESSION['nama'] ?></h4>
            <h6 class="font-weight-light">update profil</h6>

            <form class="pt-3" action="auth_model.php" method="POST">
              <?php if ($_SESSION['level'] == "rakyat") { ?>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control form-control-lg" name="nik" value="<?= $_SESSION['nik'] ?>" readonly>
                </div>
              <?php } ?>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control form-control-lg" name="nama" value="<?= $_SESSION['nama'] ?>">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control form-control-lg" name="username" value="<?= $_SESSION['username'] ?>">
              </div>
              <div class="form-group">
                <label>Telpon</label>
                <input type="text" class="form-control form-control-lg" name="telp" value="<?= $_SESSION['telp'] ?>">
              </div>

              <div class="mt-3">
                <button type="submit" class="btn btn-primary rounded-pill m-2" name="update_profile">Update</button>
              </div>

            </form>

          </div>
        </div>

        <?php require_once('footer.php') ?>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->

      <!-- partial -->

      <!-- main-panel ends -->

      <!-- page-body-wrapper ends -->

      <!-- container-scroller -->

      <!-- plugins:js -->
      <?php require_once('_js.php') ?>
      <!-- End custom js for this page-->
</body>

</html>