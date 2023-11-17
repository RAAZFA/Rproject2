<?php $halaman = "tanggapan";
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} ?>
<?php
require_once('_koneksi.php');
$query = "SELECT*FROM pengaduan ORDER BY id_pengaduan desc";
$lihatpengaduan = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RAAZFA</title>
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
                        <div class="tiles dark "></div>
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
                <div class="col-md-16 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid pt-6 px-12">
                                <div class="row vh-50 bg-light rounded align-items-center justify-content-center mx-0">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <h6 class="mb-12"> LIHAT </h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Num</th>
                                                        <th scope="col">NIK</th>
                                                        <th scope="col">Isi Laporan</th>
                                                        <th scope="col">Tanggal Pengaduan</th>
                                                        <th scope="col">FOTO </th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($lihatpengaduan as $pengaduan) { ?>
                                                        <tr>
                                                            <th scope="row"><?= $no; ?></th>
                                                            <td><?= $pengaduan['nik'] ?></td>
                                                            <td><?= $pengaduan['isi_laporan'] ?></td>
                                                            <td><?= $pengaduan['tgl_pengaduan'] ?></td>
                                                            <th><img src="foto/<?= $pengaduan['foto'] ?>" width="200px"></th>
                                                            <td><?php
                                                                if ($pengaduan['status'] == 0) {
                                                                    echo "belum divalidasi";
                                                                } else if ($pengaduan['status'] == 'proses') {
                                                                    echo 'masih dlm proses';
                                                                } else {
                                                                    echo 'selesai';
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($pengaduan['status'] == '0') { ?>
                                                                    <a onclick="return confirm('Aapakah Anda yakin mengvalidasi data ini?')" class="btn btn-warning" href="masyarakat_model.php?validasi=<?= $pengaduan['id_pengaduan']; ?>">
                                                                        validasi
                                                                    </a>
                                                                <?php } else if ($pengaduan['status'] == 'proses') { ?>
                                                                    <a href="berikan_tanggapan.php?berikan_tanggapan= <?= $pengaduan['id_pengaduan'] ?> " class="btn btn-info">
                                                                        Berikan Tanggapan
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php $no++;
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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