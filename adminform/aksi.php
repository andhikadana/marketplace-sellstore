<?php 
// koneksi database
include 'admin.php';

// menangkap data yang di kirim dari form
$gambar = $_POST['Gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$terjual = $_POST['terjual'];
$stock = $_POST['stock'];
$kategori = $_POST['kategori'];
// menginput data ke database Untuk Values $ Pake String Satu, Jan Pake Yang buat Undang Class Tabel
 $result = mysqli_query($market,"INSERT INTO product(`Gambar`,`nama`,`harga`, `deskripsi`,`terjual`,`stock`,`kategori`) VALUES('$gambar','$nama','$harga','$deskripsi','$terjual','$stock','$kategori')");
// mengalihkan halaman kembali ke index.php
print_r($result);
print_r($market);
header("Location: dash.php?page=tabel")
?>

