<?php 

// aktifkan session
session_start();

// panggil koneksi database
include "koneksi.php";

@$pass = md5($_POST["password"]);
@$email = mysqli_escape_string($koneksi, $_POST["email"]);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi,"SELECT * FROM tadmin where email='$email' and password='$password'");

$data = mysqli_fetch_array($login);

// Uji jika email dan password benar
if($data) {
    $_SESSION["id_admin"] = $data["id_admin"];
    $_SESSION["email"] = $data["email"];
    $_SESSION["password"] = $data["password"];
    $_SESSION["username"] = $data["username"];
    $_SESSION["nomin"] = $data["nomin"];

    // arahkan ke halaman admin
    header('location:admin.php');
} else {
    echo "<script>alert('Maaf, login gagal. Pastikan email dan password benar.'); document.location='index.php'; 
    </script>";
}
?>