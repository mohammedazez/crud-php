<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "database_saya";

$koneksi = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Koneksi error";
    exit();
}
echo "Koneksi sukses";
