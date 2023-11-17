<?php $halaman = "pengaduan";
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
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">form Pengaduan</h4>
              <p class="card-description">
                Pengaduan
              </p>
              <form action="masyarakat_model.php" method="post" enctype="multipart/form-data" class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama" value="<?= $_SESSION['nama'] ?>" readonly>
                </div>
                <div class="form-floating-mb-3">
                  <label for="floatingtextarea">Isi laporan </label>
                  <textarea name="isi_laporan" class="form-control" placeholder="Keterangan Laporan" style="height: 150px;"></textarea>
                </div>
                <br>
                <div class="form-group">
                  <label>Photo</label>
                  <input type="file" name="foto" class="form-control" accept="image/png, image/gif, image/jpeg" placeholder="Pilih Foto aduan">

                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit_pengaduan">Submit</button>
                <button class="btn btn-light"><a href="pengaduan.php">Cancel</a></button>
              </form>
            </div>
          </div>
        </div>




      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->

      <!-- partial -->

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    <!-- container-scroller -->

    <!-- plugins:js -->
    <?php require_once('_js.php') ?>
    <!-- End custom js for this page-->
</body>

</html>