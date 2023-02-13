<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
    <?php
    include("koneksi.php");
    if(!isset($_GET['id_bahan'])){
        header("location:tampil.php");
    }
    $id_bahan=$_GET['id_bahan'];
    $sql="SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan=tb_toko.id_bahan 
    WHERE tb_bahan.id_bahan='$id_bahan'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
?>
    <table border="0">
        <h1>Edit Data</h1>
        <form action="proses-edit.php" method="POST">
            <form>
                <input type="hidden" name="id_bahan" value="<?php echo $row['id_bahan']?>" />
<p>
    <label for="nama_bahan" value="<?php echo $row['nama_bahan']; ?>">Nama Bahan :</label>
    <input type="text" name="nama_bahan"/>
</p>
<p>
    <label for="satuan" value="<?php echo $row['satuan']; ?>">Satuan :</label>
    <input type="number" name="satuan"/>
</p>
<p>
    <label for="harga" value="<?php echo $row['harga']; ?>">Harga :</label>
    <input type="text" name="harga"/>
</p>
<p>
    <label for="nama_toko" value="<?php echo $row['nama_toko']; ?>">Nama Toko : </label>
    <input type="text" name="nama_toko" />
</p>
<p>
    <label for="alamat" value="<?php echo $row['alamat']; ?>">Alamat :</label>
    <input type="text" name="alamat"/>
</p>
<p>
    <label for="no_siup" value="<?php echo $row['no_siup']; ?>">No Siup :</label>
    <input type="text" name="no_siup"/>
</p>
<p>
    <label for="nama_pemilik" value="<?php echo $row['nama_pemilik']; ?>">Nama Pemilik :</label>
    <input type="text" name="nama_pemilik"/>
</p>
<table>
  <td><input type="submit" name="edit" value="edit data"></td>

</form>  
</table>
</body>
</html>