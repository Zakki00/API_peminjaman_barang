<?php
include('koneksi.php');
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($_GET['id']) && isset($input['iduser']) && isset($input['idbarang']) && isset($input['tanggal_peminjaman']) && isset($input['tanggal_pengembalian'])&& isset($input['jumlah'])) {
    $idtransaksi = $_GET['id'];
    $id_user = $input['iduser'];
    $id_barang = $input['idbarang'];
    $atnggal_peminjaman = $input['tanggal_peminjaman'];
    $tanggal_pengembalian = $input['tanggal_pengembalian'];

  $sql = "UPDATE Transaksi SET iduser = '$id_user', idbarang = '$id_barang', tanggal_peminjaman = '$atnggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian' WHERE idtransaksi = '$idtransaksi'";
    
    if (mysqli_query($connection, $query)) {
        echo json_encode(["message" => "Data Transaksi berhasil diperbarui"]);
    } else {
        echo json_encode(["message" => "Gagal memperbarui data Transaksi"]);
    }
} else {
    echo json_encode(["message" => "Data tidak lengkap"]);
}

mysqli_close($connection);
?>
