<?php
include 'admin.php';
//
$id = $_POST['id'];
$gambar = $_POST['Gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$terjual = $_POST['terjual'];
$stock = $_POST['stock'];

$result = mysqli_query($market,"update product set id='$id', Gambar='$gambar', nama='$nama', harga='$harga', kategori='$kategori', deskripsi='$deskripsi', terjual='$terjual', stock='$stock' where id='$id'");
//header("Location:sellstore.php");
print_r($market);
print_r($result);
header("Location: dash.php?page=tabel")
?>