<?php
require "koneksi.php";

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan,nama_customer FROM pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul_buku, harga FROM buku");

$option_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$option_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Masukan Data Transaksi</h2>
    <form action="tambah_transaksi.php" method="post">
        <!-- form input pelanggan -->
        <label for="nama_customer">Nama Pelanggan</label><br>
        <select name="id_pelanggan" id="nama_pelanggan">
        <option 
            disabled selected> Pilih Nama Pelanggan
        </option>
        <?php foreach ($option_pelanggan as $option) { ?>
            <option value="<?=$option['id_pelanggan']?>"><?= $option['nama_customer']?>
        </option>
        <?php } ?>
        </select>
        <br>
        <!-- form input buku  -->
        <label for="judul_bu- ku">Judul Buku</label><br>
        <select name="id_buku" id="judul_buku">
        <option 
            disabled selected> Pilih Judul Buku
        </option>
        <?php foreach ($option_buku as $option) { ?>
            <option value="<?=$option['id_buku']?>"><?= $option['judul_buku'] . '' . "- Rp " . $option['harga']?>
        </option>
        <?php } ?>
        </select><br>
        <label for="kuantitas">Kuantitas</label><br>
        <input type="number" name="kuantitas" id="kuantitas"><br>
        <input type="submit" value="-_- <3">
    </form>
</body>
</html>