<!--panggil file header-->
<?php include "header.php"; ?>
<?php include "koneksi.php"; ?>

<?php
// Deklarasi variabel untuk menampung data yang akan diedit atau disimpan
$vjenis_gambar = "";
$vjudul_gambar = "";
$vparagraf_1 = "";
$vparagraf_2 = "";
$vparagraf_3 = "";
$vparagraf_4 = "";
$vgambar_1 = "";
$vgambar_2 = "";
$vgambar_3 = "";

// Cek apakah ada pencarian
$search_query = "";
if (isset($_GET['search_query'])) {
    $search_query = mysqli_real_escape_string($koneksi, $_GET['search_query']);
}

// Pengujian jika tombol simpan atau edit di-submit
if (isset($_POST['bsimpan'])) {
    // Ambil data dari form
    $vjenis_gambar = $_POST['jenis_gambar'];
    $vjudul_gambar = $_POST['judul_gambar'];
    $vparagraf_1 = $_POST['paragraf_1'];
    $vparagraf_2 = $_POST['paragraf_2'];
    $vparagraf_3 = $_POST['paragraf_3'];
    $vparagraf_4 = $_POST['paragraf_4'];

    // Jika sedang dalam proses edit, ambil gambar lama dari database
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        $id_gambar = $_GET['id_gambar'];
        $tampil = mysqli_query($koneksi, "SELECT * FROM tgambar WHERE id_gambar = '$id_gambar'");
        $data = mysqli_fetch_assoc($tampil);

        $vgambar_1 = $data['gambar_1'];
        $vgambar_2 = $data['gambar_2'];
        $vgambar_3 = $data['gambar_3'];
    }

    // Proses upload gambar baru (jika ada)
    $target_dir = "uploads/gallery/";

    if ($_FILES['gambar_1']['name'] != "") {
        $target_file = $target_dir . basename($_FILES["gambar_1"]["name"]);
        if (move_uploaded_file($_FILES["gambar_1"]["tmp_name"], $target_file)) {
            $vgambar_1 = "uploads/gallery/" . basename($_FILES["gambar_1"]["name"]);
        }
    }

    if ($_FILES['gambar_2']['name'] != "") {
        $target_file = $target_dir . basename($_FILES["gambar_2"]["name"]);
        if (move_uploaded_file($_FILES["gambar_2"]["tmp_name"], $target_file)) {
            $vgambar_2 = "uploads/gallery/" . basename($_FILES["gambar_2"]["name"]);
        }
    }

    if ($_FILES['gambar_3']['name'] != "") {
        $target_file = $target_dir . basename($_FILES["gambar_3"]["name"]);
        if (move_uploaded_file($_FILES["gambar_3"]["tmp_name"], $target_file)) {
            $vgambar_3 = "uploads/gallery/" . basename($_FILES["gambar_3"]["name"]);
        }
    }

    // Pengujian jika data akan diedit
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        $id_gambar = $_GET['id_gambar'];
        $edit = mysqli_query($koneksi, "UPDATE tgambar SET
                                            jenis_gambar = '$vjenis_gambar',
                                            judul_gambar = '$vjudul_gambar',
                                            paragraf_1 = '$vparagraf_1',
                                            paragraf_2 = '$vparagraf_2',
                                            paragraf_3 = '$vparagraf_3',
                                            paragraf_4 = '$vparagraf_4',
                                            gambar_1 = '$vgambar_1',
                                            gambar_2 = '$vgambar_2',
                                            gambar_3 = '$vgambar_3'
                                        WHERE id_gambar = '$id_gambar'");

        if ($edit) {
            echo "<script>alert('Edit data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    } else {
        // Jika data akan disimpan
        $simpan = mysqli_query($koneksi, "INSERT INTO tgambar (jenis_gambar, judul_gambar, paragraf_1, paragraf_2, paragraf_3, paragraf_4, gambar_1, gambar_2, gambar_3) 
                                          VALUES ('$vjenis_gambar', '$vjudul_gambar', '$vparagraf_1', '$vparagraf_2', '$vparagraf_3', '$vparagraf_4', '$vgambar_1', '$vgambar_2', '$vgambar_3')");

        if ($simpan) {
            echo "<script>alert('Simpan data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Simpan data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    }
}

// Pengujian jika tombol edit/hapus di-klik
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "edit") {
        $id_gambar = $_GET['id_gambar'];
        $tampil = mysqli_query($koneksi, "SELECT * FROM tgambar WHERE id_gambar = '$id_gambar'");
        $data = mysqli_fetch_array($tampil);

        if ($data) {
            $vjenis_gambar = $data['jenis_gambar'];
            $vjudul_gambar = $data['judul_gambar'];
            $vparagraf_1 = $data['paragraf_1'];
            $vparagraf_2 = $data['paragraf_2'];
            $vparagraf_3 = $data['paragraf_3'];
            $vparagraf_4 = $data['paragraf_4'];
            $vgambar_1 = $data['gambar_1'];
            $vgambar_2 = $data['gambar_2'];
            $vgambar_3 = $data['gambar_3'];
        }
    } else if ($_GET['hal'] == "hapus") {
        $id_gambar = $_GET['id_gambar'];

        // Ambil data gambar untuk menghapus file
        $tampil = mysqli_query($koneksi, "SELECT * FROM tgambar WHERE id_gambar = '$id_gambar'");
        $data = mysqli_fetch_assoc($tampil);

        if ($data) {
            // Hapus file gambar jika ada
            if (file_exists($data['gambar_1'])) {
                unlink($data['gambar_1']);
            }
            if (file_exists($data['gambar_2'])) {
                unlink($data['gambar_2']);
            }
            if (file_exists($data['gambar_3'])) {
                unlink($data['gambar_3']);
            }
        }

        // Hapus data dari database
        $hapus = mysqli_query($koneksi, "DELETE FROM tgambar WHERE id_gambar = '$id_gambar'");

        if ($hapus) {
            echo "<script>alert('Hapus data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Hapus data gagal! Silakan coba lagi.');document.location='?';</script>";
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
                        <a class="collapse-item active" href="gallery.php">Gallery</a>
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
                <form class="form-inline mr-auto w-100 navbar-search" action="gallery.php" method="GET">
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
<h1 class="h3 mb-2 text-gray-800">Data Gallery</h1>

<!-- Modal untuk Edit Gallery -->
<div class="modal fade" id="addgaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Gambar</label>
                        <select class="form-select" name="jenis_gambar">
                            <option value="" <?= $vjenis_gambar == "" ? "selected" : "" ?>>-Pilih-</option>
                            <option value="Tradisi" <?= $vjenis_gambar == "Tradisi" ? "selected" : "" ?>>Tradisi</option>
                            <option value="Tarian" <?= $vjenis_gambar == "Tarian" ? "selected" : "" ?>>Tarian</option>
                            <option value="Pakaian" <?= $vjenis_gambar == "Pakaian" ? "selected" : "" ?>>Pakaian</option>
                            <option value="Makanan" <?= $vjenis_gambar == "Makanan" ? "selected" : "" ?>>Makanan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Gambar</label>
                        <textarea name="judul_gambar" class="form-control" rows="3" placeholder="" required><?= $vjudul_gambar ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 1</label>
                        <textarea name="paragraf_1" class="form-control" rows="3" placeholder="" required><?= $vparagraf_1 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 2</label>
                        <textarea name="paragraf_2" class="form-control" rows="3" placeholder="" required><?= $vparagraf_2 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 3</label>
                        <textarea name="paragraf_3" class="form-control" rows="3" placeholder="" required><?= $vparagraf_3 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf 4</label>
                        <textarea name="paragraf_4" class="form-control" rows="3" placeholder="" required><?= $vparagraf_4 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar 1</label>
                        <input type="file" name="gambar_1" class="form-control" accept="image/*">
                        <?php if ($vgambar_1): ?>
                            <img src="<?= $vgambar_1 ?>" alt="Gambar 1" width="100">
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Gambar 2</label>
                        <input type="file" name="gambar_2" class="form-control" accept="image/*">
                        <?php if ($vgambar_2): ?>
                            <img src="<?= $vgambar_2 ?>" alt="Gambar 2" width="100">
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Gambar 3</label>
                        <input type="file" name="gambar_3" class="form-control" accept="image/*">
                        <?php if ($vgambar_3): ?>
                            <img src="<?= $vgambar_3 ?>" alt="Gambar 3" width="100">
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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addgaleri">Tambah</button>
    </div>
</div>
    <div class="card-body">

        <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Jenis Gambar</th>
                                            <th>Judul Gambar</th>
                                            <th>Paragraf 1</th>
                                            <th>Paragraf 2</th>
                                            <th>Paragraf 3</th>
                                            <th>Paragraf 4</th>
                                            <th>Gambar 1</th>
                                            <th>Gambar 2</th>
                                            <th>Gambar 3</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            // Modify SQL query to search by email, username, or nomin
                            $query = "SELECT * FROM tgambar WHERE judul_gambar LIKE '%$search_query%' OR jenis_gambar LIKE '%$search_query%' ORDER BY id_gambar ASC";
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
                                        <td><?= $data['jenis_gambar']; ?></td>
                                        <td><?= $data['judul_gambar']; ?></td>
                                        <td><?= $data['paragraf_1']; ?></td>
                                        <td><?= $data['paragraf_2']; ?></td>
                                        <td><?= $data['paragraf_3']; ?></td>
                                        <td><?= $data['paragraf_4']; ?></td>
                                        <td><img src="<?= $data['gambar_1']; ?>" alt="Gambar" width="100" height="100"></td>
                                        <td><img src="<?= $data['gambar_2']; ?>" alt="Gambar" width="100" height="100"></td>
                                        <td><img src="<?= $data['gambar_3']; ?>" alt="Gambar" width="100" height="100"></td>
                                        <td style="text-align: center; vertical-align: top;">
                                           <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                            <a href="gallery.php?hal=edit&id_gambar=<?= $data['id_gambar']?>" class="btn btn-primary" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
                                            <a href="gallery.php?hal=hapus&id_gambar=<?= $data['id_gambar']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')" style="font-size: 13px; padding: 7px 17px; display: inline-block; width: 100px; text-align: center;">Hapus</a>
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