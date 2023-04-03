<?php
require 'koneksi.php';
$tbl = "SELECT* FROM pelanggan";
$result = mysqli_query($conn,$tbl);
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
    <a href="form_pelanggan.html">Tambah pelanggan</a>
    <table border="1px solid black">
        <tr>
            <th>ID pelanggan</th>
            <th>Nama Customer</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Nomer hp</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row['id_pelanggan']?></td>
            <td><?= $row['nama_customer']?></td>
            <td><?= $row['alamat']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['no_hp']?></td>
            <td>
                <a href="editform_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']?>" ?>
                Edit</a>
                <a href="delete_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']?>" ?>
                Hapus</a>
            </td>
        </tr>
        <?php endwhile?>
    </table>
</body>
</html>