<?php $halaman = "berikan_tanggapan";
session_start();
if (!isset($_SESSION['username'])){
    header ('Location: login.php');
    $id_pengaduan = $_GET['berikan_tanggapan'];
    $query = "SELECT * FROM pengaduan  INNER JOIN masyarakat on pengaduan.nik = masyarakat.nik
    where pengaduan.id_pengaduan = '$id_pengaduan'";
    $query = "SELECT * FROM pengaduan where id_pengaduan ='$id_pengaduan' ";
    $hasil = mysqli_query($conn,$query);
    $pengaduan = mysqli_fetch_array($hasil);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $_SESSION['nama']?></title>
  <!-- plugins:css -->
  <?php require_once('_css.php')?>
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once('_navbar.php')?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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
      <?php require_once('_sidebar.php')?>
      <!-- partial -->
      <div class="main-panel">
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-80 bg-light  align-items-top  justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <br>
                        <h3>welcome to dashboard pengaduan <?= $_SESSION['nama']?>
                        <br>
                        (anda login sebagai <?=$_SESSION['level' ]?>)
                      
                        </h3>
                        <table>
                            <tr>
                                <td> NIK : </td>
                                <td>  </td>
                            </tr>
                        </table>
                        <form action="masyarakat_model.php" method="post">
                            <Textarea name="tanggapan ">
                    
                            </Textarea>

                        </form>
                    </div>
                </div>
            </div>
          
            <?php require_once('footer.php')?>
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      
      <!-- main-panel ends -->
    
    <!-- page-body-wrapper ends -->
  
  <!-- container-scroller -->

  <!-- plugins:js -->
  <?php require_once('_js.php')?>
  <!-- End custom js for this page-->
</body>

</html>

