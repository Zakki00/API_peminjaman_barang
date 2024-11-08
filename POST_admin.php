<?php
include('koneksi.php');
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);


if(isset($input['nama-admin'])&&isset($input['tanggal_lahir'])&&isset($input['alamat'])&&isset($input['username'])&&isset($input['password'])){
    $nama_admin = $input['nama-admin'];
    $tanggal_lahir = $input['tanggal_lahir'];
    $alamat = $input['alamat'];
    $username = $input['username'];
    $password = $input['password'];

    $sql = "INSERT INTO admin (nama_admin, tanggal_lahir, alamat, username, password) VALUES ('$nama_admin', '$tanggal_lahir', '$alamat', '$username', '$password')";

    if(mysqli_query($connection, $sql)){
        echo json_encode(array('message' => 'Data admin berhasil ditambahkan'));
    }else{
        echo json_encode(array('message' => 'Data admin gagal ditambahkan'));
    }
}else{
    echo json_encode(array('message' => 'Data tidak lengkap'));
}
mysqli_close($connection);
?>