<?php include("header.php") ?>
<?php include("koneksi.php") ?>


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

<!-- Awal Row -->
<div class="row">
    <!-- awal col-md-12 -->
    <div class="col-md-12">
        <!-- Awal Card -->
        <div class="card shadow mb-4 mt-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" class="text-center">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary form control" name="btampilkan"><i class="fa fa-search"></i> Tampilkan</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="tables.php" class="btn btn-primary form control"><i class="fa fa-backward"></i> Kembali</a>
                                    </div>
                                </div>
                            </form>

                            <?php
                                if (isset($_POST['btampilkan'])) :
                            ?>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            $tgl1 = $_POST['tanggal1'];
                                            $tgl2 = $_POST['tanggal2'];

                                            $tampil = mysqli_query($koneksi, "SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal ASC");
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
                                            <td style="text-align: center; vertical-align: top;">
                                            <div style="display: flex; flex-direction: column; align-items: center; height: 100%; justify-content: center;">
                                                <a href="tables.php?hal=edit&id=<?= $data['id']?>" class="btn btn-danger" style="font-size: 13px; padding: 7px 17px; margin-bottom: 15px; display: inline-block; width: 100px; text-align: center;">Edit</a>
                                                <a href="tables.php?hal=hapus&id=<?= $data['id']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')" style="font-size: 13px; padding: 7px 17px; display: inline-block; width: 100px; text-align: center;">Hapus</a>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <center>
                                    <form method="POST" action="exportexcel.php">
                                        <div class="col-md-4">
                                        <input type="hidden" name="tanggala" value="<?=@$_POST['tanggal1'] ?>">
                                        <input type="hidden" name="tanggalb" value="<?=@$_POST['tanggal2'] ?>">

                                        <button class="btn btn-success form-control" name="bexport"><i class="fa fa-download"></i> Export Data Excel</button>
                                        </div>
                                    </form>
                                </center>
                            </div>

                            <?php endif; ?>
                        </div>
        </div>
        <!-- Akhir Card -->
    </div>
    <!-- akhir col-md-12 -->
</div>
<!-- Akhir Row -->

<?php include("footer.php") ?>