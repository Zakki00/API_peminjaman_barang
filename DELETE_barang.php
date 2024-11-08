<?php
include('koneksi.php');
header("Content-Type: application/json");

if (isset($_GET['id'])) {
    $idbarang = $_GET['id'];
    $query = "DELETE FROM Barang WHERE idbarang = $idbarang";
    
    if (mysqli_query($connection, $query)) {
        echo json_encode(["message" => "Data barang berhasil dihapus"]);
    } else {
        echo json_encode(["message" => "Gagal menghapus data"]);
    }
} else {
    echo json_encode(["message" => "ID tidak disediakan"]);
}

mysqli_close($connection);
?>
