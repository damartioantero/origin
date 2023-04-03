<?php
require "koneksi.php";

$judul_buku = $_POST ['judul_buku'];
$penulis = $_POST ['penulis'];
$penerbit = $_POST ['penerbit'];
$tahun_terbit = $_POST ['tahun_terbit'];
$harga = $_POST ['harga'];

$sql = "INSERT INTO buku VALUES ('','$judul_buku','$penulis','$penerbit','$tahun_terbit','$harga')";
// var_dump($sql)
mysqli_query ($conn,$sql);
header ("location : data_buku.php");
?>