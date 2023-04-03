<?php
require "koneksi.php";

$id_buku = $_GET['id_buku'];
$sql = "SELECT * FROM buku WHERE id_buku='$id_buku'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2> Edit Data Buku</h2>
    <form action="edit_buku.php" method="POST">
        
        <input type="hidden" id="id_buku" name ="id_buku"
        value="<?=$row['id_buku']?>" />
        <br>
        <label for ="judul_buku">Judul Buku</label>
        <input type="text" id="judul_buku" name ="judul_buku"
        value="<?=$row['judul_buku']?>">
        <br>
        <label for ="penulis">Penulis</label>
        <input type="text" id="penulis" name ="penulis"
        value="<?=$row['penulis']?>">
        <br>
        <label for ="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name ="penerbit"
        value="<?=$row['penerbit']?>">
        <br>
        <label for ="tahun_terbit">Tahun Terbit</label>
        <input type="date" id="tahun_terbit" name ="tahun_terbit"
        value="<?=$row['tahun_terbit']?>">
        <br>
        <label for ="harga">Harga</label>
        <input type="number" id="harga" name ="harga"
        value="<?=$row['harga']?>">
        <br>
        <br>
        <input type="submit" value="UPDATE">
    </form>
    <?php endwhile?>
</body>
</html>