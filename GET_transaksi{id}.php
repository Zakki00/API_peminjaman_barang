<?php

include('koneksi.php');
header("Content-Type: application/json");

if(isset($_GET['id'])){
    $id_transaksi = $_GET['id'];
    $query = "SELECT * FROM Transaksi WHERE idtransaksi = $id_transaksi";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}else{
    echo json_encode(["message" => "Data Tidak Di Temukan"]);
}

?>