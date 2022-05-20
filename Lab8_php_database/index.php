<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
      <h1>Data Barang</h1>
      <button><a href="tambah.php">Tambah Barang</a></button>
      <br><br>
        <div class="main">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                	<th>No.</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Katagori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                	<td><?= $row['id_barang'];?></td>
                    <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
                    $row['nama'];?>" width="100"></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['kategori'];?></td>
                    <td><?= $row['harga_beli'];?></td>
                    <td><?= $row['harga_jual'];?></td>
                    <td><?= $row['stok'];?></td>
                    <td ?= $i; ?><a href="">ubah</a>
                    	<a href="hapus.php?id<?= $row['id'];?>">hapus</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>