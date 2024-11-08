<?php
include('koneksi.php');
header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);

if(isset($_GET['id']) && isset($input['nama_user']) && isset($input['tanggal_lahir']) && isset($input['username']) && isset($input['password'])){
    $id_user = $_GET['id'];
    $nama_user = $input['nama_user'];
    $tanggal_lahir = $input['tanggal_lahir'];
    $username = $input['username'];
    $password = $input['password'];

    $sql = "UPDATE User SET nama_user = '$nama_user', tanggal_lahir = '$tanggal_lahir', username = '$username', password = '$password' WHERE iduser = $id_user";

    if(mysqli_query($connection, $sql)){
        echo json_encode(array('message' => 'Data user berhasil diperbarui'));
    }else{
        echo json_encode(array('message' => 'Data user gagal diperbarui'));
    }    
}else{
    echo json_encode(array('message' => 'Data tidak lengkap'));
}

?>