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
            <li class="nav-item active">
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


<?php
// Koneksi ke database
include('koneksi.php'); // Koneksi ke database

// Mendapatkan tahun saat ini
$currentYear = date('Y');

// Query untuk mengambil data ulasan berdasarkan tahun berjalan
$query = "SELECT MONTHNAME(tanggal) AS month, COUNT(id) AS count 
          FROM ttamu 
          WHERE YEAR(tanggal) = '$currentYear' 
          GROUP BY MONTH(tanggal)
          ORDER BY MONTH(tanggal)"; // Urutkan berdasarkan bulan

$result = $koneksi->query($query);

// Array untuk menyimpan bulan dan jumlah ulasan
$months = [];
$reviewCounts = [];

// Mengolah hasil query
while ($row = $result->fetch_assoc()) {
    $months[] = $row['month'];  // Menambahkan bulan ke dalam array
    $reviewCounts[] = $row['count'];  // Menambahkan jumlah ulasan ke dalam array
}

// Menyusun data untuk JavaScript
$months_json = json_encode($months);
$reviewCounts_json = json_encode($reviewCounts);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pengunjung</h1>

<?php 
                        // deklarasi tanggal

                        // menampilkan tanggal sekarang
                        $tgl_sekarang = date ("Y-m-d");

                        // menampilkan tanggal kemarin
                        $kemarin = date("Y-m-d", strtotime('-1 day', strtotime(date('Y-m-d'))));

                        // mendapatkan 6 hari sebelum tanggal sekarang
                        $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

                        $sekarang = date('Y-m-d h:i:s');

                       // query jumlah data pengunjung hari ini
                        $query_hari_ini = "SELECT count(*) FROM ttamu WHERE DATE(tanggal) = '$tgl_sekarang'";
                        $result_hari_ini = mysqli_query($koneksi, $query_hari_ini);
                        if (!$result_hari_ini) {
                            die("Query Error (Hari Ini): " . mysqli_error($koneksi));
                        }
                        $tgl_sekarang = mysqli_fetch_array($result_hari_ini);

                        // query jumlah data pengunjung kemarin
                        $query_kemarin = "SELECT count(*) FROM ttamu WHERE DATE(tanggal) = '$kemarin'";
                        $result_kemarin = mysqli_query($koneksi, $query_kemarin);
                        if (!$result_kemarin) {
                            die("Query Error (Kemarin): " . mysqli_error($koneksi));
                        }
                        $kemarin = mysqli_fetch_array($result_kemarin);

                        // query jumlah data pengunjung dalam seminggu
                        $seminggu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu WHERE tanggal BETWEEN '$seminggu' AND '$sekarang'"));

                        // query jumlah data pengunjung dalam 1 bulan
                        $bulan_ini = date('m');
                        $sebulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu WHERE month(tanggal) = '$bulan_ini'"));

                        // query jumlah data pengunjung dalam keseluruhan
                        $keseluruhan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu"));

                    ?>
                    

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Hari Ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tgl_sekarang[0]?></div>
                </div>
                <div class="col-auto">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Minggu Ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $seminggu[0]?></div>
                </div>
                <div class="col-auto">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bulan Ini
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $sebulan[0]?></div>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Keseluruhan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $keseluruhan[0]?></div>
                </div>
                <div class="col-auto">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->

<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Grafik Ulasan [<?= date('Y') ?>]</h6>
    </div>
    <div class="card-body">
        <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
        <!-- End of Content Wrapper -->
          <!-- Footer -->
          <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
    <!-- End of Page Wrapper -->

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>


  <!-- Menyisipkan script JavaScript langsung di sini -->
  <script>
window.onload = function () {
    // Ambil data bulan dan jumlah ulasan dari PHP
    var months = <?php echo $months_json; ?>;  // Data bulan dalam format array
    var reviewCounts = <?php echo $reviewCounts_json; ?>;  // Data jumlah ulasan per bulan dalam format array

    // Array bulan lengkap
    var allMonths = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    // Inisialisasi data jumlah ulasan per bulan dengan nilai 0
    var allReviewCounts = new Array(12).fill(0);

    // Menyisipkan data ulasan ke bulan yang sesuai
    months.forEach(function (month, index) {
        var monthIndex = allMonths.indexOf(month);
        if (monthIndex !== -1) {
            allReviewCounts[monthIndex] = reviewCounts[index];
        }
    });

    // Inisialisasi grafik dengan Chart.js
    var ctx = document.getElementById("myAreaChart").getContext("2d");
    new Chart(ctx, {
        type: "line",
        data: {
            labels: allMonths,
            datasets: [{
                label: "Jumlah Ulasan",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                data: allReviewCounts,
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    time: { unit: 'month' },
                    ticks: { maxTicksLimit: 12 },
                    scaleLabel: { display: true, labelString: 'Bulan' }
                }],
                yAxes: [{
                    ticks: { min: 0, stepSize: 2, maxTicksLimit: 5 },
                    scaleLabel: { display: true, labelString: 'Jumlah Ulasan' }
                }]
            },
            legend: { display: true, position: 'top' },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel;
                    }
                }
            }
        }
    });
};
</script>

       <!-- Bootstrap core JavaScript-->
       <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>