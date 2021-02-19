<?php
// Buat data variabel
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "database_saya";

// Fungsi SQL untuk mengkoneksikan
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// Buat kondisi jika koneksi gagal atau berhasil
if (mysqli_connect_errno()) {
    echo "Koneksi error";
    exit();
}
echo "Koneksi sukses";
