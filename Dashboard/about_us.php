<!--panggil file header-->
<?php include "header.php"; ?>
<?php include "koneksi.php"; ?>

<?php
// Variabel untuk menampung data yang akan diedit, diawali dengan 'v' (penanda)
$vjudul_about = "";
$vparagraf_pertama = "";
$vpoin_1 = "";
$vpoin_2 = "";
$vpoin_3 = "";
$vparagraf_terakhir = "";
$vwebsite_url = "";
$vgambar_about = "";  // Variabel untuk gambar

// Cek apakah ada parameter 'hal' yang menunjukkan edit
if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
    // Ambil id_about dari URL untuk edit
    $id_about = $_GET['id'];

    // Query untuk mengambil data yang ingin diedit
    $query = mysqli_query($koneksi, "SELECT * FROM tabout_us WHERE id_about = '$id_about'");
    $data = mysqli_fetch_assoc($query);

    // Mengambil data lama untuk digunakan dalam form
    $vjudul_about = $data['judul_about'];
    $vparagraf_pertama = $data['paragraf_pertama'];
    $vpoin_1 = $data['poin_1'];
    $vpoin_2 = $data['poin_2'];
    $vpoin_3 = $data['poin_3'];
    $vparagraf_terakhir = $data['paragraf_terakhir'];
    $vwebsite_url = $data['website_url'];
    $vgambar_about = $data['gambar_about']; // Menyimpan nama gambar lama

    // Proses jika form disubmit
    if (isset($_POST['bedit'])) {
        // Menangani data yang di-post dari form
        $vjudul_about = $_POST['judul_about'];
        $vparagraf_pertama = $_POST['paragraf_pertama'];
        $vpoin_1 = $_POST['poin_1'];
        $vpoin_2 = $_POST['poin_2'];
        $vpoin_3 = $_POST['poin_3'];
        $vparagraf_terakhir = $_POST['paragraf_terakhir'];
        $vwebsite_url = $_POST['website_url'];

        // Cek apakah gambar baru di-upload
        if ($_FILES['gambar_about']['name'] != "") {
            // Tentukan folder tempat menyimpan gambar
            $target_dir = "uploads/about_us/";
            $target_file = $target_dir . basename($_FILES["gambar_about"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Validasi file gambar
            if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                // Upload gambar ke folder
                if (move_uploaded_file($_FILES["gambar_about"]["tmp_name"], $target_file)) {
                    // Gambar berhasil diupload, update path gambar di database
                    $vgambar_about = "uploads/about_us/" . basename($_FILES["gambar_about"]["name"]);
                } else {
                    echo "<script>alert('Gagal mengupload gambar.');</script>";
                }
            } else {
                echo "<script>alert('Hanya file gambar yang diperbolehkan (jpg, jpeg, png, gif).');</script>";
            }
        }

        // Query untuk update data, termasuk gambar (jika ada gambar baru)
        $update_sql = "UPDATE tabout_us SET 
            judul_about = '$vjudul_about',
            paragraf_pertama = '$vparagraf_pertama',
            poin_1 = '$vpoin_1',
            poin_2 = '$vpoin_2',
            poin_3 = '$vpoin_3',
            paragraf_terakhir = '$vparagraf_terakhir',
            website_url = '$vwebsite_url',
            gambar_about = '$vgambar_about' 
            WHERE id_about = '$id_about'";

        // Proses update ke database
        if (mysqli_query($koneksi, $update_sql)) {
            echo "<script>alert('Edit data sukses!'); document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.'); document.location='?';</script>";
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
                        <a class="collapse-item active" href="about_us.php">About Us</a>
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

<!-- Begin Page Content -->
<div class="container-fluid">
    
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data About Us</h1>

<!-- Modal untuk Edit Kontak -->
<div class="modal fade" id="addabout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data About Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <textarea name="judul_about" class="form-control" rows="3" placeholder="" required><?= $vjudul_about ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf Pertama</label>
                        <textarea name="paragraf_pertama" class="form-control" rows="3" placeholder="" required><?= $vparagraf_pertama ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Poin 1</label>
                        <textarea name="poin_1" class="form-control" rows="3" placeholder="" required><?= $vpoin_1 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Poin 2</label>
                        <textarea name="poin_2" class="form-control" rows="3" placeholder="" required><?= $vpoin_2 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Poin 3</label>
                        <textarea name="poin_3" class="form-control" rows="3" placeholder="" required><?= $vpoin_3 ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Paragraf Terakhir</label>
                        <textarea name="paragraf_terakhir" class="form-control" rows="3" placeholder="" required><?= $vparagraf_terakhir ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Website URL</label>
                        <textarea name="website_url" class="form-control" rows="3" placeholder="" required><?= $vwebsite_url ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar_about" class="form-control" accept="image/*">
                        <?php if ($vgambar_about): ?>
            <img src="<?= $vgambar_about ?>" alt="Gambar About Us" width="100" height="100">
        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="bedit" class="btn btn-primary">Save</button>
                </div>
            </>
        </div>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">

        <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Paragraf Pertama</th>
                                            <th>Poin 1</th>
                                            <th>Poin 2</th>
                                            <th>Poin 3</th>
                                            <th>Paragraf Terakhir</th>
                                            <th>Website URL</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // Query untuk mengambil data dari tabel tabout_us
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tabout_us");
                                        $no = 1;
                                        while($data = mysqli_fetch_array($tampil)) {
                                        ?>
                                        <tr>
                                        <td><?= $data['judul_about']; ?></td>
                                        <td><?= $data['paragraf_pertama']; ?></td>
                                        <td><?= $data['poin_1']; ?></td>
                                        <td><?= $data['poin_2']; ?></td>
                                        <td><?= $data['poin_3']; ?></td>
                                        <td><?= $data['paragraf_terakhir']; ?></td>
                                        <td><?= $data['website_url']; ?></td>
                                        <td><img src="<?= $data['gambar_about']; ?>" alt="Gambar" width="100" height="100"></td>
                                        <td style="text-align: center; vertical-align: top;">
                                            <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                                <a href="about_us.php?hal=edit&id=<?= $data['id_about']?>" class="btn btn-danger" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
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