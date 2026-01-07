<?php
// Menyertakan file koneksi
include('koneksi.php');

// Menangkap parameter pencarian
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';

if (!empty($search_query)) {
    // Escaping input dan query database
    $search_query = mysqli_real_escape_string($koneksi, $search_query);
    $query = "SELECT id_berita, judul_berita, tanggal, gambar 
              FROM tberita 
              WHERE judul_berita LIKE '%$search_query%' 
              ORDER BY tanggal DESC";
    $result = mysqli_query($koneksi, $query);

    // Mengembalikan hasil dalam bentuk JSON
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($data);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
?>