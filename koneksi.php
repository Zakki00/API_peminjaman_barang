<?php
// Deklarasi variabel
$db_host = "localhost";
$db_user = "zakki";
$db_pass = "smkn3tbn";
$db_name = "Peminjaman-Barang";    

// Membuat koneksi
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Memeriksa koneksi
if (!$connection) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

?>
