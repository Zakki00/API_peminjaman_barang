<?php
include('koneksi.php');
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);

if(isset($input['iduser']) && isset($input['idbarang']) && isset($input['tanggal_peminjaman']) && isset($input['tanggal_pengembalian'])&& isset($input['jumlah'])){
    $id_user = $input['iduser'];
    $id_barang = $input['idbarang'];
    $tanggal_pinjam = $input['tanggal_peminjaman'];
    $tanggal_kembali = $input['tanggal_pengembalian'];
    $jumlah = $input['jumlah'];

    $sql = "insert into Transaksi (iduser, idbarang, tanggal_peminjaman, tanggal_pengembalian, jumlah) values ('$id_user', '$id_barang', '$tanggal_pinjam', '$tanggal_kembali', '$jumlah')";

    if(mysqli_query($connection, $sql)){
        echo json_encode(array('message' => 'Transaksi Berhasil'));
    }else{
        echo json_encode(array('message' => 'Transaksi Gagal Ditambahkan'));
    }
}else{
    echo json_encode(array('message' => 'Data Tidak Lengkap'));
}

mysqli_close($connection);
?>