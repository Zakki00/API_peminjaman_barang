<?php
include('koneksi.php');
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);

if(isset($_GET['id']) && isset($input['nama_admin']) && isset($input['tanggal_lahir']) && isset($input['alamat']) && isset($input['username']) && isset($input['password'])){
    $id_admin = $_GET['id'];
    $nama_user = $input['nama_admin'];
    $tanggal_lahir = $input['tanggal_lahir'];
    $alamat = $input['alamat'];
    $username = $input['username'];
    $password = $input['password'];

    $sql = "UPDATE Admin SET nama_admin = '$nama_admin', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', username = '$username', password = '$password' WHERE idadmin = $id_admin";

    if(mysqli_query($connection, $sql)){
        echo json_encode(array('message' => 'Data Admin berhasil diperbarui'));
    }else{
        echo json_encode(array('message' => 'Data Admin gagal diperbarui'));
    }    
}else{
    echo json_encode(array('message' => 'Data tidak lengkap'));
}

?>