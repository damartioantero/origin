<?php
require "koneksi.php";

$nama_customer = $_POST ['nama_customer'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$no_hp = $_POST ['no_hp'];

$sql = "INSERT INTO pelanggan VALUES ('','$nama_customer','$alamat','$email','$no_hp')";
mysqli_query ($conn,$sql);

header("location: data_pelanggan.php");
?> 