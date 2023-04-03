<?php
require "koneksi.php";

$id_pelanggan = $_GET['id_pelanggan'];
$sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2> Edit Data Buku</h2>
    <form action="edit_pelanggan.php" method="POST">
        
        <input type="hidden" id="id_pelanggan" name ="id_pelanggan"
        value="<?=$row['id_pelanggan']?>" />
        <br>
        <label for ="nama_customer">Nama Customer</label>
        <input type="text" id="nama_customer" name ="nama_customer"
        value="<?=$row['nama_customer']?>">
        <br>
        <label for ="alamat">alamat</label>
        <input type="text" id="alamat" name ="alamat"
        value="<?=$row['alamat']?>">
        <br>
        <label for ="email">email</label>
        <input type="text" id="email" name ="email"
        value="<?=$row['email']?>">
        <br>
        <label for ="no_hp">Nomer HP</label>
        <input type="text" id="no_hp" name ="no_hp"
        value="<?=$row['no_hp']?>">
        <br>
        <br>
        <input type="submit" value="UPDATE">
    </form>
    <?php endwhile?>
</body>
</html>