<?php
include('koneksi.php');
header("Content-Type: application/json");

if (isset($_GET['id'])) {
    $idadmin = $_GET['id'];
    $query = "DELETE FROM Admin WHERE idadmin = $idadmin";
    
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
