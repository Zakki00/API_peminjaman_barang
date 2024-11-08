<?php
include('koneksi.php');
header('Content-Type: application/json');
$input = json_decode(file_get_contents("php://input"), true);

if(isset($input['namabarang']) && isset($input['jumlahbarang'])){
    $namabarang = $input['namabarang'];
    $jumlahbarang = $input['jumlahbarang'];
   
   $sql = "insert into Barang (nama_barang, jumlah_barang) values('$namabarang', '$jumlahbarang')";

   if(mysqli_query($connection, $sql)){
       echo json_encode(array('message' => 'Barang Berhasil'));
   }else{
    echo json_encode(array('message' => 'Barang Gagal Ditambahkan'));
   }
}else{
    echo json_encode(array('message' => 'Data Tidak Lengkap'));
}

mysqli_close($connection);


?>  