<?php
include 'koneksi.php';
$id = $_GET['id_bahan'];
$sql = "DELETE from tb_bahan where id_bahan='$id'";
$sql = "DELETE From tb_toko where id_toko='$id'";

$query = mysqli_query($conn, $sql);

if($query){
    header('location:tampil.php?status=sukses');
}else{
    echo "gagal";
}
?>