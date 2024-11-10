<?php

include ('koneksi.php');
header('Content-Type: application/json');

if(isset($_GET['username']) && isset($_GET['password'])){
    $username = $_GET['username'];
    $password = $_GET['password'];    

    $sql = "SELECT * FROM Admin WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0){
        echo json_encode(array('message' => 'Login Berhasil'));
    }else{
        echo json_encode(array('message' => 'Login Gagal'));
    }
}else{
    echo json_encode(array('message' => 'Data Tidak Lengkap')); 
}
?>