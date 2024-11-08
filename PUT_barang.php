<?php
include('koneksi.php');
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($_GET['id']) && isset($input['nama_barang']) && isset($input['jumlah_barang'])) {
    $idbarang = $_GET['id'];
    $namabarang = $input['nama_barang'];
    $jumlah_barang = $input['jumlah_barang'];
    
    $query = "UPDATE Barang SET nama_barang = '$namabarang', jumlah_barang = $jumlah_barang WHERE idbarang = $idbarang";
    
    if (mysqli_query($connection, $query)) {
        echo json_encode(["message" => "Data barang berhasil diperbarui"]);
    } else {
        echo json_encode(["message" => "Gagal memperbarui data"]);
    }
} else {
    echo json_encode(["message" => "Data tidak lengkap"]);
}

mysqli_close($connection);
?>
