<?php
include('koneksi.php');

header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);


if(isset($input['nama_user']) && isset($input['tanggal_lahir']) && isset($input['username']) && isset($input['password'])){
    $nama_user = $input['nama_user'];
    $tanggal_lahir = $input['tanggal_lahir'];
    $username = $input['username'];
    $password = $input['password'];


    $sql = "insert into User (nama_user, tanggal_lahit, username, password) values ($nama_user, $tanggal_lahir, $username, $password)";

    if(mysqli_query($connection, $sql)){
        echo json_encode(array('message' => 'Data user berhasil ditambahkan'));
    }else{
        echo json_encode(array('message' => 'Data user gagal ditambahkan'));
    }
}else{
    echo json_encode(array('message' => 'Data tidak lengkap'));
}

mysqli_close($connection);

?>