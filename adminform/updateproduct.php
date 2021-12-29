<?php
include 'koneksi.php';
//
$id = $_POST['id'];
$gambar = $_POST['Gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$terjual = $_POST['terjual'];
$stock = $_POST['stock'];

mysqli_query($conn,"update product set id='$id', Gambar='$gambar', nama='$nama', harga='$harga', deskripsi='$deskripsi', terjual='$terjual', stock='$stock' where id='$id'");
//header("Location:sellstore.php");
print_r($conn);
header("Location: dash.php?page=tabel")
?>