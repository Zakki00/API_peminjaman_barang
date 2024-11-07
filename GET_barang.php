<?php
// Memasukkan koneksi
include('koneksi.php');

// Pengaturan header agar output dalam format JSON
header("Content-Type: application/json");

// Membuat query untuk mengambil data
$query = mysqli_query($connection, "SELECT * FROM Barang");

// Inisialisasi array untuk menyimpan hasil
$data = [];

// Mengambil hasil query
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

// Menampilkan hasil dalam format JSON
echo json_encode($data);

// Menutup koneksi
mysqli_close($connection);
?>
