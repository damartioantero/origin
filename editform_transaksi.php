<?php
require "koneksi.php";
$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_customer FROM pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul_buku ,harga FROM buku ");

$options_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC);

$id_transaksi = $_GET['id_transaksi'];
$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_customer, buku.id_buku, buku.judul_buku 
FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN buku ON buku.id_buku = transaksi.id_buku WHERE transaksi.id_transaksi = '$id_transaksi'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)):
?>
i believe jesus

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="edit_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value="<?=$row['id_transaksi']?>">

        <label for="nama_customer">Nama Pelanggan</label><br>
        <select name="id_pelanggan" id="nama_customer"><?=$row['nama_customer']?>
        <?php foreach ($options_pelanggan as $option) { 
            $selected = $option['id_pelanggan']==$row['id_pelanggan'] ? 'selected' : '';    
        ?>
            <option value="<?=$option['id_pelanggan']?>" <?= $selected ?>> <?= $option['nama_customer']?>
        </option>
        <?php } ?>
        </select>
        <br>

        <label for="judul_buku">Judul buku</label><br>
        <select name="id_buku" id="judul_buku"><?=$row['judul_buku']?>
        <?php foreach ($options_buku as $option) { 
            $selected = $option['id_buku']==$row['id_buku'] ? 'selected' : '';    
        ?>
            <option value="<?=$option['id_buku']?>" <?= $selected ?>><?= $option['judul_buku'] . '' . "- Rp " . $option['harga']?>
        </option>
        <?php } ?>
        </select>
        <br>

        <label for="kuantitas">Kuantitas</label><br>
        <input type="number" name="kuantitas" id="kuantitas" value="<?=$row['kuantitas']?>"><br>

        <input type="submit" value="UPDATE">
    </form>
    <?php endwhile ?>
</body>
</html>