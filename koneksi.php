<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dbwebsite";

    $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

        // Variabel untuk koneksi PDO
        $host = $server;
        $dbname = $database;
        $username = $user;
?>