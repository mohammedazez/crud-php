<?php
include "config.php";

// Ambil ID
if (isset($_GET['id'])) {
    // Buat variable
    $user_id = $_GET['id'];

    // Ambil data sql
    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

    // Ekseskusi sqlnya 
    $result = $conn->query($sql);

    // Buat conditional jika berhasil dan gagal
    if ($result == TRUE) {
        echo "Hapus data berhasil";
    } else {
        echo "hapus gagal" . $sql . "</br>" . $conn->error;
    }
}
