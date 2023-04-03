<?php
require "koneksi.php";

$id_pelanggan = $_GET['id_pelanggan'];
$sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn,$sql);

if (!$result) {
    echo "<script>
    alert('gagal hapus');
    location.href = 'data_pelanggan.php';
    </script>";
} else {
    echo "<script>
    alert('berhasil hapus');
    location.href = 'data_pelanggan.php';
    </script>";
}
?>
