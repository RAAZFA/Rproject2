<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <?php if (($_SESSION['level'] == "admin") or ($_SESSION['level'] == "petugas")) { ?>
      <li class="nav-item">
        <a class="nav-link" aria-expanded="false" href="data_masyarakat.php" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Masyarakat</span>
          <i class="menu-arrow"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="data_petugas.php" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Data Petugas</span>
          <i class="menu-arrow"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tanggapan.php" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Tanggapan</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
    <?php } ?>
    <?php if ($_SESSION['level'] == "rakyat") { ?>
      <li class="nav-item">
        <a class="nav-link" href="pengaduan.php" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Pengaduan</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="Lihat_pengaduan.php" aria-expanded="false" aria-controls="icons">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">lihat</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
    <?php } ?>

</nav>