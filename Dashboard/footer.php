
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
    $(document).ready(function() {
        // Cek apakah URL mengandung parameter 'hal' = edit
        <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
            // Menampilkan modal jika 'hal=edit' dipilih
            $('#addadminprofile').modal('show');
        <?php } ?>

        // Reset form ketika modal ditutup (baik setelah edit atau tambah)
        $('#addadminprofile').on('hidden.bs.modal', function () {
            // Kosongkan semua input pada form saat modal ditutup
            $(this).find('input').val('');
            // Reset URL setelah modal ditutup (untuk menghindari mode edit tetap aktif)
            window.history.pushState('', '', 'admin.php'); // Reset URL ke admin.php
        });

        // Reset form ketika tombol 'Tambah' diklik
        $('#addadminprofile').on('show.bs.modal', function () {
            // Kosongkan nilai input sebelum form tampil untuk tambah data baru
            $(this).find('input').val('');
            // Pastikan URL kosong dari parameter 'hal=edit' (untuk menambah data)
            window.history.pushState('', '', 'admin.php'); // Reset URL ke admin.php
        });
    });

    // pengunjung
    $(document).ready(function() {
        // Cek apakah URL mengandung parameter 'hal' = edit
        <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
            // Menampilkan modal jika 'hal=edit' dipilih
            $('#addtamu').modal('show');
        <?php } ?>

        // Reset form ketika modal ditutup (baik setelah edit atau tambah)
        $('#addtamu').on('hidden.bs.modal', function () {
            // Kosongkan semua input pada form saat modal ditutup
            $(this).find('input, textarea').val('');
            // Reset URL setelah modal ditutup (untuk menghindari mode edit tetap aktif)
            window.history.pushState('', '', 'tables.php'); // Reset URL ke admin.php
        });

        // Reset form ketika tombol 'Tambah' diklik
        $('#addtamu').on('show.bs.modal', function () {
            // Kosongkan nilai input sebelum form tampil untuk tambah data baru
            $(this).find('input, textarea').val('');
            // Pastikan URL kosong dari parameter 'hal=edit' (untuk menambah data)
            window.history.pushState('', '', 'tables.php'); // Reset URL ke admin.php
        });
    });

    // galeri
    $(document).ready(function() {
    // Cek apakah URL mengandung parameter 'hal' = edit
    <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
        // Menampilkan modal jika 'hal=edit' dipilih
        $('#addgaleri').modal('show');
    <?php } ?>

    // Reset form ketika modal ditutup (baik setelah edit atau tambah)
    $('#addgaleri').on('hidden.bs.modal', function () {
        // Kosongkan semua input pada form saat modal ditutup
        $(this).find('input, textarea').val('');
        $(this).find('select').prop('selectedIndex', 0); // Reset select ke default
        // Reset URL setelah modal ditutup (untuk menghindari mode edit tetap aktif)
        window.history.pushState('', '', 'gallery.php'); // Reset URL ke gallery.php
    });

    // Reset form ketika tombol 'Tambah' diklik
    $('#addgaleri').on('show.bs.modal', function () {
        // Kosongkan nilai input sebelum form tampil untuk tambah data baru
        $(this).find('input, textarea').val('');
        $(this).find('select').prop('selectedIndex', 0); // Reset select ke default
        // Pastikan URL kosong dari parameter 'hal=edit' (untuk menambah data)
        window.history.pushState('', '', 'gallery.php'); // Reset URL ke gallery.php
    });
});

    // berita
    $(document).ready(function() {
    // Cek apakah URL mengandung parameter 'hal' = edit
    <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
        // Menampilkan modal jika 'hal=edit' dipilih
        $('#addberita').modal('show');
    <?php } ?>

    // Reset form ketika modal ditutup (baik setelah edit atau tambah)
    $('#addberita').on('hidden.bs.modal', function () {
        // Kosongkan semua input pada form saat modal ditutup
        $(this).find('input, textarea').val('');
        $(this).find('select').prop('selectedIndex', 0); // Reset select ke default
        // Reset URL setelah modal ditutup (untuk menghindari mode edit tetap aktif)
        window.history.pushState('', '', 'berita.php'); // Reset URL ke gallery.php
    });

    // Reset form ketika tombol 'Tambah' diklik
    $('#addberita').on('show.bs.modal', function () {
        // Kosongkan nilai input sebelum form tampil untuk tambah data baru
        $(this).find('input, textarea').val('');
        $(this).find('select').prop('selectedIndex', 0); // Reset select ke default
        // Pastikan URL kosong dari parameter 'hal=edit' (untuk menambah data)
        window.history.pushState('', '', 'berita.php'); // Reset URL ke gallery.php
    });
});

// kontak
$(document).ready(function () {
    // Cek apakah URL mengandung parameter 'hal=edit'
    <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
        // Menampilkan modal jika 'hal=edit' dipilih
        $('#addkontak').modal('show');
    <?php } ?>

    // Reset URL saat modal ditutup
    $('#addkontak').on('hidden.bs.modal', function () {
        // Reset URL ke admin.php
        window.history.pushState('', '', 'kontak.php');
    });
});

// about
$(document).ready(function () {
    // Cek apakah URL mengandung parameter 'hal=edit'
    <?php if (isset($_GET['hal']) && $_GET['hal'] == 'edit') { ?>
        // Menampilkan modal jika 'hal=edit' dipilih
        $('#addabout').modal('show');
    <?php } ?>

    // Reset URL saat modal ditutup
    $('#addabout').on('hidden.bs.modal', function () {
        // Reset URL ke admin.php
        window.history.pushState('', '', 'about_us.php');
    });
});
</script>

</body>

</html>