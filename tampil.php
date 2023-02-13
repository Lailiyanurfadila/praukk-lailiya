<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href="tambah.php"><input type="button" value="tambah"></a>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Bahan</td>
            <td>Satuan</td>
            <td>Harga</td>
            <td>Nama Toko</td>
            <td>Alamat</td>
            <td>No Siup</td>
            <td>Nama Pemilik</td>
            <td>Aksi</td>
</tr>
<?php
include("koneksi.php");
$query= mysqli_query($conn, "SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan=tb_toko.id_bahan");
$no=1;
foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_bahan']; ?></td>
        <td><?= $row['satuan']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td><?= $row['nama_toko']; ?></td> 
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['no_siup']; ?></td>
        <td><?= $row['nama_pemilik'];?></td>
       <td>
                <a href="edit.php?id_bahan=<?php echo $row ['id_bahan']; ?>">EDIT ||</a>
                <a href="hapus.php?id_bahan=<?php echo $row ['id_bahan']; ?>">HAPUS ||</a>
            </td>
</tr>
<?php endforeach ?>
</tabel>
</body>
</html>