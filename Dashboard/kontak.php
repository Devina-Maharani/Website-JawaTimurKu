<!--panggil file header-->
<?php include "header.php"; ?>
<?php include "koneksi.php"; 

// Variabel untuk menampung data yang akan diedit, diawali dengan 'v' (penanda)
$vaddress = "";
$vcall_us = "";
$vemail_us = "";
$vmaps = "";
$vtwitter = "";
$vfacebook = "";
$vinstagram = "";

// Cek apakah ada parameter 'hal' yang menunjukkan edit
if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
    // Ambil id_kontak dari URL untuk edit
    $id_kontak = $_GET['id'];

    // Query untuk mengambil data yang ingin diedit
    $query = mysqli_query($koneksi, "SELECT * FROM tkontak WHERE id_kontak = '$id_kontak'");
    $data = mysqli_fetch_array($query);

    // Menyimpan nilai yang ada pada form untuk diedit
    $vaddress = $data['address'];
    $vcall_us = $data['call_us'];
    $vemail_us = $data['email_us'];
    $vmaps = $data['maps'];
    $vtwitter = $data['twitter'];
    $vfacebook = $data['facebook'];
    $vinstagram = $data['instagram'];
}

// Proses edit data saat form disubmit
if (isset($_POST['bedit'])) {
    // Menangkap data dari form edit, dengan 'v' sebagai penanda
    $vaddress = htmlspecialchars($_POST['address'], ENT_QUOTES);
    $vcall_us = htmlspecialchars($_POST['call_us'], ENT_QUOTES);
    $vemail_us = htmlspecialchars($_POST['email_us'], ENT_QUOTES);
    $vmaps = htmlspecialchars($_POST['maps'], ENT_QUOTES);
    $vtwitter = htmlspecialchars($_POST['twitter'], ENT_QUOTES);
    $vfacebook = htmlspecialchars($_POST['facebook'], ENT_QUOTES);
    $vinstagram = htmlspecialchars($_POST['instagram'], ENT_QUOTES);

    // Pengujian jika data akan diedit
    if (isset($_GET['hal']) && $_GET['hal'] == "edit") {
        // Query untuk mengupdate data berdasarkan id_kontak
        $edit = mysqli_query($koneksi, "UPDATE tkontak SET
                                          address = '$vaddress',
                                          call_us = '$vcall_us',
                                          email_us = '$vemail_us',
                                           maps = '$vmaps',
                                           twitter = '$vtwitter',
                                           facebook = '$vfacebook',
                                           instagram = '$vinstagram'
                                          WHERE id_kontak = '$_GET[id]'");

        // Uji jika edit data sukses
        if ($edit) {
            echo "<script>alert('Edit data sukses!');document.location='?';</script>";
        } else {
            echo "<script>alert('Edit data gagal! Silakan coba lagi.');document.location='?';</script>";
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
                        <a class="collapse-item" href="berita.php">Blog</a>
                        <a class="collapse-item active" href="kontak.php">Contact</a>
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
<h1 class="h3 mb-2 text-gray-800">Data Kontak</h1>

<!-- Modal untuk Edit Kontak -->
<div class="modal fade" id="addkontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Kontak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" rows="3" placeholder="" required><?= $vaddress ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Call Us</label>
                        <input type="text" name="call_us" class="form-control" value="<?= $vcall_us ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Email Us</label>
                        <textarea name="email_us" class="form-control" rows="3" placeholder="" required><?= $vemail_us ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Maps HTML</label>
                        <textarea name="maps" class="form-control" rows="3" placeholder="" required><?= $vmaps ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <textarea name="twitter" class="form-control" rows="3" placeholder="" required><?= $vtwitter ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <textarea name="facebook" class="form-control" rows="3" placeholder="" required><?= $vfacebook ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <textarea name="instagram" class="form-control" rows="3" placeholder="" required><?= $vinstagram ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="bedit" class="btn btn-primary">Save</button>
                </div>
            </form>
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
                                            <th>Address</th>
                                            <th>Call Us</th>
                                            <th>Email Us</th>
                                            <th>Maps HTML</th>
                                            <th>Twitter</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // Query untuk mengambil data dari tabel tkontak
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tkontak");
                                        $no = 1;
                                        while($data = mysqli_fetch_array($tampil)) {
                                        ?>
                                        <tr>
                                        <td><?= $data['address']; ?></td>
                                        <td><?= $data['call_us']; ?></td>
                                        <td><?= $data['email_us']; ?></td>
                                        <td><?= $data['maps']; ?></td>
                                        <td><?= $data['twitter']; ?></td>
                                        <td><?= $data['facebook']; ?></td>
                                        <td><?= $data['instagram']; ?></td>
                                        <td style="text-align: center; vertical-align: top;">
                                            <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                                <a href="kontak.php?hal=edit&id=<?= $data['id_kontak']?>" class="btn btn-danger" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
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