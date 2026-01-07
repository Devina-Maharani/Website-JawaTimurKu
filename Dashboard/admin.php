<!--panggil file header-->
<?php include "header.php"; ?>
<?php
include 'koneksi.php';

// Deklarasi variabel untuk menampung data yang akan diedit atau disimpan
$vemail = "";
$vpassword = "";
$vusername = "";
$vnomin = "";

// Cek apakah ada pencarian
$search_query = "";
if (isset($_GET['search_query'])) {
    $search_query = mysqli_real_escape_string($koneksi, $_GET['search_query']);
}

// Pengujian jika tombol simpan atau edit di-submit
if (isset($_POST['bsimpan'])) {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $nomin = $_POST['nomin'];

    // Hash password dengan MD5
    $hashed_password = md5($password);

    // Pengujian jika data akan diedit
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        // Query untuk mengupdate data
        $edit = mysqli_query($koneksi, "UPDATE tadmin SET
                                            email = '$email',
                                            password = '$hashed_password',
                                            username = '$username',
                                            nomin = '$nomin'
                                        WHERE id_admin = '$_GET[id_admin]'");

        // Uji jika edit data sukses
        if ($edit) {
            echo "<script>alert('Edit data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.');document.location='?';</script>";
        }
    } else {
        // Jika data akan disimpan
        $simpan = mysqli_query($koneksi, "INSERT INTO tadmin (email, password, username, nomin) 
                                          VALUES ('$email', '$hashed_password', '$username', '$nomin')");
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
        $tampil = mysqli_query($koneksi, "SELECT * FROM tadmin WHERE id_admin='$_GET[id_admin]'");
        $data = mysqli_fetch_array($tampil);

        if ($data) {
            // Jika data ditemukan, data ditampung ke variabel
            $vemail = $data['email'];
            // Password diambil dari database dalam bentuk yang sudah di-hash (MD5)
            $vpassword = $data['password']; 
            $vusername = $data['username'];
            $vnomin = $data['nomin'];
        }
    } else if ($_GET['hal'] == "hapus") {
        // Pengujian jika hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM tadmin WHERE id_admin='$_GET[id_admin]'");
        // Uji jika hapus data sukses
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
            <li class="nav-item active">
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
                 <form class="form-inline mr-auto w-100 navbar-search" action="admin.php" method="GET">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Admin</h1>
                    </div>
                </div>

 <!-- Modal untuk Tambah/Edit Admin -->
 <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $vusername ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $vemail ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>No. Hp</label>
                        <input type="text" name="nomin" class="form-control" value="<?= $vnomin ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?= $vpassword ?>" placeholder="" required>
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
                    <h6 class="m-0 font-weight-bold text-primary">Profil Admin</h6>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addadminprofile">Tambah</>
                    </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Username</th>
                                            <th>No. HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                            // Modify SQL query to search by email, username, or nomin
                            $query = "SELECT * FROM tadmin WHERE email LIKE '%$search_query%' OR username LIKE '%$search_query%' OR nomin LIKE '%$search_query%' ORDER BY id_admin ASC";
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
                                            <td><?= $data['email']; ?></td>
                                            <td><?= $data['password']; ?></td>
                                            <td><?= $data['username']; ?></td>
                                            <td><?= $data['nomin']; ?></td>
                                            <td style="text-align: center; vertical-align: top;">
                                            <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                                <a href="admin.php?hal=edit&id_admin=<?= $data['id_admin']?>" class="btn btn-danger" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
                                                <a href="admin.php?hal=hapus&id_admin=<?= $data['id_admin']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')" style="font-size: 13px; padding: 7px 17px; display: inline-block; width: 100px; text-align: center;">Hapus</a>
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



        </div>
    <!-- /.container-fluid -->

    </div>
<!-- End of Main Content -->

<!--panggil file footer-->
<?php include "footer.php"; ?>