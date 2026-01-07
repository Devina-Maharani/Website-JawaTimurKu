<!--panggil file header-->
<?php include "header.php"; ?>
<?php include "koneksi.php"; ?>

<?php
// Deklarasi variabel untuk menampung data yang akan diedit atau disimpan
$vnama_penulis = "";
$vtanggal = "";
$vjenis_berita = "";
$vjudul_berita = "";
$vparagraf_1 = "";
$vparagraf_2 = "";
$vparagraf_3 = "";
$vparagraf_4 = "";
$vgambar = "";

// Cek apakah ada pencarian
$search_query = "";
if (isset($_GET['search_query'])) {
    $search_query = mysqli_real_escape_string($koneksi, $_GET['search_query']);
}

// Pengujian jika tombol simpan atau edit di-submit
if (isset($_POST['bsimpan'])) {
    // Ambil data dari form
    $vnama_penulis = mysqli_real_escape_string($koneksi, $_POST['nama_penulis']);
    $vtanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $vjenis_berita = mysqli_real_escape_string($koneksi, $_POST['jenis_berita']);
    $vjudul_berita = mysqli_real_escape_string($koneksi, $_POST['judul_berita']);
    $vparagraf_1 = mysqli_real_escape_string($koneksi, $_POST['paragraf_1']);
    $vparagraf_2 = mysqli_real_escape_string($koneksi, $_POST['paragraf_2']);
    $vparagraf_3 = mysqli_real_escape_string($koneksi, $_POST['paragraf_3']);
    $vparagraf_4 = mysqli_real_escape_string($koneksi, $_POST['paragraf_4']);

    // Default: gunakan gambar lama
    $vgambar = $vgambar;

    // Jika ada gambar baru diupload
    if (!empty($_FILES['gambar']['name'])) {
        $gambar_baru = preg_replace('/[^A-Za-z0-9_\-\.]/', '', basename($_FILES["gambar"]["name"]));
        $target_dir = "uploads/berita/";
        $target_file = $target_dir . $gambar_baru;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $vgambar = $target_file; // Gunakan gambar baru
        } else {
            echo "<script>alert('Gagal mengupload gambar baru.');</script>";
        }
    }

    // Proses simpan/edit data
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        // Edit data
        $id_berita = $_GET['id_berita'];

        // Ambil data gambar lama dari database jika gambar baru tidak diupload
        if (empty($_FILES['gambar']['name'])) {
            $query_gambar = mysqli_query($koneksi, "SELECT gambar FROM tberita WHERE id_berita = '$id_berita'");
            $data_gambar = mysqli_fetch_array($query_gambar);
            $vgambar = $data_gambar['gambar'];
        }

        $edit = mysqli_query($koneksi, "UPDATE tberita SET
                                            nama_penulis = '$vnama_penulis',
                                            tanggal = '$vtanggal',
                                            jenis_berita = '$vjenis_berita',
                                            judul_berita = '$vjudul_berita',
                                            paragraf_1 = '$vparagraf_1',
                                            paragraf_2 = '$vparagraf_2',
                                            paragraf_3 = '$vparagraf_3',
                                            paragraf_4 = '$vparagraf_4',
                                            gambar = '$vgambar'
                                        WHERE id_berita = '$id_berita'");

        if ($edit) {
            echo "<script>alert('Edit data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.');</script>";
        }
    } else {
        // Simpan data baru
        $simpan = mysqli_query($koneksi, "INSERT INTO tberita (nama_penulis, tanggal, jenis_berita, judul_berita, paragraf_1, paragraf_2, paragraf_3, paragraf_4, gambar) 
                                          VALUES ('$vnama_penulis', '$vtanggal', '$vjenis_berita', '$vjudul_berita', '$vparagraf_1', '$vparagraf_2', '$vparagraf_3', '$vparagraf_4', '$vgambar')");

        if ($simpan) {
            echo "<script>alert('Simpan data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Simpan data gagal! Silakan coba lagi.');</script>";
        }
    }
}

// Pengujian jika tombol edit/hapus di-klik
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "edit") {
        $id_berita = $_GET['id_berita'];
        $tampil = mysqli_query($koneksi, "SELECT * FROM tberita WHERE id_berita = '$id_berita'");
        $data = mysqli_fetch_array($tampil);

        if ($data) {
            $vnama_penulis = $data['nama_penulis'];
            $vtanggal = $data['tanggal'];
            $vjenis_berita = $data['jenis_berita'];
            $vjudul_berita = $data['judul_berita'];
            $vparagraf_1 = $data['paragraf_1'];
            $vparagraf_2 = $data['paragraf_2'];
            $vparagraf_3 = $data['paragraf_3'];
            $vparagraf_4 = $data['paragraf_4'];
            $vgambar = $data['gambar']; // Ambil gambar lama
        }
    } else if ($_GET['hal'] == "hapus") {
        $id_berita = $_GET['id_berita'];

        // Hapus data berita dan gambar terkait
        $tampil = mysqli_query($koneksi, "SELECT gambar FROM tberita WHERE id_berita = '$id_berita'");
        $data = mysqli_fetch_array($tampil);

        if ($data && file_exists($data['gambar'])) {
            unlink($data['gambar']); // Hapus file gambar dari folder
        }

        $hapus = mysqli_query($koneksi, "DELETE FROM tberita WHERE id_berita = '$id_berita'");
        if ($hapus) {
            echo "<script>alert('Hapus data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Hapus data gagal! Silakan coba lagi.');</script>";
        }
    }
}
?>




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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Kelola Website</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilities:</h6>
                        <a class="collapse-item" href="about_us.php">About Us</a>
                        <a class="collapse-item" href="gallery.php">Gallery</a>
                        <a class="collapse-item active" href="berita.php">Blog</a>
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
            <li class="nav-item">
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

                                    <!-- Search Form -->
                <form class="form-inline mr-auto w-100 navbar-search" action="berita.php" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" name="search_query" value="<?php echo isset($_GET['search_query']) ? $_GET['search_query'] : ''; ?>" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

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


<!-- Begin Page Content -->
<div class="container-fluid">
    
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Berita</h1>

<!-- Modal untuk Edit Gallery -->
<div class="modal fade" id="addberita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Penulis</label>
                        <textarea name="nama_penulis" class="form-control" rows="3" placeholder="" required><?= $vnama_penulis ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?= $vtanggal; ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Berita</label>
                        <select class="form-select" name="jenis_berita">
                            <option>-Pilih-</option>
                            <option value="Tradisi" <?= ($vjenis_berita == "Tradisi") ? "selected" : ""; ?>>Tradisi</option>
                            <option value="Tarian" <?= ($vjenis_berita == "Tarian") ? "selected" : ""; ?>>Tarian</option>
                            <option value="Pakaian" <?= ($vjenis_berita == "Pakaian") ? "selected" : ""; ?>>Pakaian</option>
                            <option value="Makanan" <?= ($vjenis_berita == "Makanan") ? "selected" : ""; ?>>Makanan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <textarea name="judul_berita" class="form-control" rows="3" placeholder="" required><?= $vjudul_berita ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 1</label>
                        <textarea name="paragraf_1" class="form-control" rows="3" placeholder="" required><?= $vparagraf_1; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 2</label>
                        <textarea name="paragraf_2" class="form-control" rows="3" placeholder="" required><?= $vparagraf_2; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 3</label>
                        <textarea name="paragraf_3" class="form-control" rows="3" placeholder="" required><?= $vparagraf_3; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 4</label>
                        <textarea name="paragraf_4" class="form-control" rows="3" placeholder="" required><?= $vparagraf_4; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                        <?php if ($vgambar): ?>
                        <img src="<?= $vgambar; ?>" alt="Gambar Lama" width="100" height="100">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="bsimpan" class="btn btn-primary">Save</button>
                </div>
            </>
        </div>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
    <div style="display: flex; gap: 10px;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addberita">Tambah</button>
    </div>
</div>
    <div class="card-body">

        <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Penulis</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Berita</th>
                                            <th>Judul Berita</th>
                                            <th>Paragraf 1</th>
                                            <th>Paragraf 2</th>
                                            <th>Paragraf 3</th>
                                            <th>Paragraf 4</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                            // Modify SQL query to search by email, username, or nomin
                            $query = "SELECT * FROM tberita WHERE nama_penulis LIKE '%$search_query%' OR jenis_berita LIKE '%$search_query%' OR judul_berita LIKE '%$search_query%' ORDER BY tanggal ASC";
                            $tampil = mysqli_query($koneksi, $query);
                            $no = 1;

                            // Check if there are any results
                            if (mysqli_num_rows($tampil) == 0) {
                                echo "<tr><td colspan='6' style='text-align: center;'>No results found for '$search_query'</td></tr>";
                            }

                            while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                        <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama_penulis']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($data['tanggal'])); ?></td>
                                        <td><?= $data['jenis_berita']; ?></td>
                                        <td><?= $data['judul_berita']; ?></td>
                                        <td><?= $data['paragraf_1']; ?></td>
                                        <td><?= $data['paragraf_2']; ?></td>
                                        <td><?= $data['paragraf_3']; ?></td>
                                        <td><?= $data['paragraf_4']; ?></td>
                                        <td><img src="<?= $data['gambar']; ?>" alt="Gambar Berita" width="100" height="100"></td>
                                        <td style="text-align: center; vertical-align: top;">
                                           <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                            <a href="berita.php?hal=edit&id_berita=<?= $data['id_berita']?>" class="btn btn-primary" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
                                            <a href="berita.php?hal=hapus&id_berita=<?= $data['id_berita']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')" style="font-size: 13px; padding: 7px 17px; display: inline-block; width: 100px; text-align: center;">Hapus</a>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- panggil file footer-->
<?php include "footer.php"; ?>