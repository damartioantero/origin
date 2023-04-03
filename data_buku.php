<?php
require 'koneksi.php';
$sql = "SELECT * FROM buku";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <a href="form_buku.html">tambah buku</a>
    <table border="1px solid black">
        <tr>
            <th>ID buku</th>
            <th>Judul buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun terbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row['id_buku']?></td>
            <td><?= $row['judul_buku']?></td>
            <td><?= $row['penulis']?></td>
            <td><?= $row['penerbit']?></td>
            <td><?= $row['tahun_terbit']?></td>
            <td><?= $row['harga']?></td>
            <td>
                <a href="editform_buku.php?id_buku=<?= $row['id_buku']?>" ?>
                Edit</a>
                <a href="delete_buku.php?id_buku=<?= $row['id_buku']?>" ?>
                Hapus</a>
            </td>
        </tr>
        <?php endwhile?>
    </table>
</body>
</html>