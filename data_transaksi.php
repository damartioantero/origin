<?php
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_customer, buku.id_buku, buku.judul_buku
FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN buku ON buku.id_buku = transaksi.id_buku ORDER by id_transaksi ";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Data  Transaksi Toko Lanang</h2>
    <a href="tambahform_transaksi.php" class="button3">Tambah Data Transaksi</a>
    <table border = "3px solid yellow">
        <tr>
            <th>Id transaksi</th>
            <th>Nama Majelis Kristen Indonesia</th>
            <th>Nama Buku</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th class="aksi">Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)):
        $total_pembayaran = $row['kuantitas']*$row['harga']
        ?>
        <tr>
            <td><?= $row['id_transaksi']?></td>
            <td><?= $row['nama_customer']?></td>
            <td><?= $row['judul_buku']?></td>
            <td><?= $row['kuantitas']?></td>
            <td><?= $row['harga']?></td>
            <td><?=$total_pembayaran ?></td>
            <td>
            <a href="editform_transaksi.php?id_transaksi=<?= $row['id_transaksi']?>" ?>
            Edit</a>
            <a href="delete_transaksi.php?id_transaksi=<?= $row['id_transaksi']?>" ?>
            Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>                                                                                                                           
</body>
</html>