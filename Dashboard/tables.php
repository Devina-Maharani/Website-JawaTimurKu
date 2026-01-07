<!--panggil file header-->
<?php include "header.php"; ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Website</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Kelola Website</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilities:</h6>
                        <a class="collapse-item" href="about_us.php">About Us</a>
                        <a class="collapse-item" href="gallery.php">Gallery</a>
                        <a class="collapse-item" href="berita.php">Blog</a>
                        <a class="collapse-item" href="kontak.php">Contact</a>
                    </div>
                </div>
            </li>

            <!-- Heading Pengunjung -->
            <div class="sidebar-heading">
                Data Pengunjung
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Heading Pengunjung -->
            <div class="sidebar-heading">
                Manajemen Komentar
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="komen.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href ="logout.php" class="btn btn-primary mb-3"><i class="fa fa-sign-out"></i> Logout</a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
      
    
       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


<?php include 'koneksi.php'; 

// Deklarasi variabel untuk menampung data yang akan diedit atau disimpan
$vnama = "";
$valamat = "";
$vulasan = "";
$vnope = "";

// Pengujian jika tombol simpan atau edit di-submit
if (isset($_POST['bsimpan'])) {
    $tgl = date("Y-m-d");

    // htmlspecialchars agar inputan lebih aman dari injection
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $ulasan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES);

    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ulasan = $_POST['ulasan'];
    $nope = $_POST['nope'];

    // Pengujian jika data akan diedit
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        // Query untuk mengupdate data
        $edit = mysqli_query($koneksi, "UPDATE ttamu SET
                                            nama = '$nama',
                                            alamat = '$alamat',
                                            ulasan = '$ulasan',
                                            nope = '$nope'
                                        WHERE id = '$_GET[id]'");

        // Uji jika edit data sukses
        if ($edit) {
            echo "<script>alert('Edit data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    } else {
        // Jika data akan disimpan
        $simpan = mysqli_query($koneksi, "INSERT INTO ttamu (tanggal, nama, alamat, ulasan, nope) 
                                          VALUES ('$tgl', '$nama', '$alamat', '$ulasan', '$nope')");

        // Uji jika simpan data sukses
        if ($simpan) {
            echo "<script>alert('Simpan data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Simpan data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    }
}

// Pengujian jika tombol edit/hapus di-klik
if (isset($_GET['hal'])) {
    // Pengujian jika edit data
    if ($_GET['hal'] == "edit") {
        // Tampilkan data yang akan diedit
        $tampil = mysqli_query($koneksi, "SELECT * FROM ttamu WHERE id='$_GET[id]'");
        $data = mysqli_fetch_array($tampil);

        if ($data) {
            // Jika data ditemukan, data ditampung ke variabel
            $vtanggal = $data['tanggal'];
            $vnama = $data['nama'];
            $valamat = $data['alamat'];
            $vulasan = $data['ulasan'];
            $vnope = $data['nope'];
        }
    } else if ($_GET['hal'] == "hapus") {
        // Pengujian jika hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM ttamu WHERE id='$_GET[id]'");
        // Uji jika hapus data sukses
        if ($hapus) {
            echo "<script>alert('Hapus data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Hapus data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    }
}





?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pengunjung</h1>

 <!-- Modal untuk Tambah/Edit Admin -->
 <div class="modal fade" id="addtamu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ulasan Pengunjung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $vnama ?>" placeholder="Ketik Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $valamat ?>" placeholder="Ketik Alamat" required>
                    </div>
                    <div class="form-group">
                        <label>Ulasan</label>
                        <input type="text" name="ulasan" class="form-control" value="<?= $vulasan ?>" placeholder="Ketik Ulasan" required>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="nope" class="form-control" value="<?= $vnope ?>" placeholder="Ketik No. HP" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="bsimpan" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
    <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung Hari Ini [<?= date('d-m-Y') ?>]</h6>
    <div style="display: flex; gap: 10px;">
        <a href="rekapitulasi.php" class="btn btn-success"><i class="fa fa-table" aria-hidden="true"></i> Rekapitulasi Pengunjung</a>
    </div>
</div>
    <div class="card-body">

        <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pengunjung</th>
                                            <th>Alamat</th>
                                            <th>Ulasan</th>
                                            <th>No. HP</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pengunjung</th>
                                            <th>Alamat</th>
                                            <th>Ulasan</th>
                                            <th>No. HP</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $tgl = date('Y-m-d');
                                            $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu where tanggal like '%$tgl%' order by id desc");
                                            $no = 1;
                                            while($data = mysqli_fetch_array($tampil)){
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['tanggal']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['ulasan']; ?></td>
                                            <td><?= $data['nope']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!--panggil file footer-->
<?php include "footer.php"; ?>

