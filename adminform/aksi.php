<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$gambar = $_POST['Gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$terjual = $_POST['terjual'];
$stock = $_POST['stock'];
// menginput data ke database
 $result = mysqli_query($conn,"INSERT INTO product(`Gambar`,`nama`,`harga`,`deskripsi`,`terjual`,`stock`) VALUES('$gambar','$nama','$harga','$deskripsi','$terjual','$stock')");
// mengalihkan halaman kembali ke index.php
print_r($result);
print_r($_POST);
print_r($tambah);
print_r($stock);
?>
<html>
    <p><a href="sellstore.php">Kembali</a></p>
    <p><a href="tables.php">kembali ke input</a></p>
</html>
