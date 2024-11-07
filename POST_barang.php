<?php
include('koneksi.php');
$input = json_decode(file_get_contents("php://input"), true);

if(isset($input['namabarang']) && isset($input['jumlahbarang'])){
    $namabarang = $input['namabarang'];
    $jumlahbarang = $input['jumlahbarang'];
   
   $sql = "insert into Barang (nama_barang, jumlah_barang) values('$namabarang', '$jumlahbarang')";

   if (mysqli_query($connection, $query)) {
    echo json_encode(["message" => "Data barang berhasil ditambahkan"]);
} else {
    echo json_encode(["message" => "Gagal menambahkan data"]);
}
}

?>