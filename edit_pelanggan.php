<?php 
require "koneksi.php";

$id_pelanggan = $_POST['id_pelanggan'];
$nama_customer = $_POST['nama_customer'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$sql = "UPDATE pelanggan SET nama_customer ='$nama_customer',
alamat ='$alamat',email ='$email',no_hp ='$no_hp' WHERE id_pelanggan ='$id_pelanggan'";
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<script>
    alert('berhasil update');
    location.href = 'data_pelanggan.php';
    </script>";
} else {
    echo "<script>
    alert('gagal update');
    location.href = 'data_pelanggan.php';
    </script>";
}
?>