<?php 

// session start
session_start();

// hilangkan session yang sudah di set
unset($_SESSION['id_admin']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['nama_admin']);

session_destroy();
echo "<script>alert('Anda telah keluar dari halaman admin.'); document.location='index.php'; 
    </script>";
?>