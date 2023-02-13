<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id_toko = $_POST['id_bahan'];
    $nama_bahan = $_POST['nama_bahan'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $nama_toko = $_POST['nama_toko'];
    $alamat = $_POST['alamat'];
    $no_siup = $_POST['no_siup'];
    $nama_pemilik = $_POST['nama_pemilik'];

    $sql = "UPDATE tb_bahan set nama_bahan='$nama_bahan', satuan='$satuan', harga='$harga' where id_bahan='$id_toko'";
    $query = mysqli_query($conn, $sql);

    $sql = "UPDATE tb_toko set nama_toko='$nama_toko', alamat='$alamat', no_siup='$no_siup', nama_pemilik='$nama_pemilik' where id_bahan='$id_toko'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>
