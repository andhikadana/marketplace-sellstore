<?php
//koneksi Ke database
include 'admin.php';

//menangkap data melalui method='post'
$gambar = $_POST['Gambar'];                         //menangkap data yang dikirim dari form yang ber-name Gambar
$nama = $_POST['nama'];                             //menangkap data yang dikirim dari form yang ber-name nama
$harga = $_POST['harga'];                           //menangkap data yang dikirim dari form yang ber-name harga
$deskripsi = $_POST['deskripsi'];                   //menangkap data yang dikirim dari form yang ber-name deskripsi
$terjual = $_POST['terjual'];                       //menangkap data yang dikirim dari form yang ber-name terjual
$stock = $_POST['stock'];                           //menangkap data yang dikirim dari form yang ber-name stock
$kategori = $_POST['kategori'];                     //menangkap data yang dikiirm dari form yang ber-name kategori

//Di BUTUHKAAN PENJELASAN PENARUHAN ROWS Biar memudahkan perulangan nya
$sql = "INSERT INTO product(`Gambar`,`nama`,`harga`, `deskripsi`,`terjual`,`stock`,`kategori`) VALUES";

//Perulangan Untuk Bagian VALUES
$no = 0;
foreach($gambar as $dtgm){
    $sql .= "('".$dtgm."','".$nama[$no]."','".$harga[$no]."','".$deskripsi[$no]."','".$terjual[$no]."','".$stock[$no]."','".$kategori[$no]."'),";
    $no++;
}

// Kita hilangkan tanda koma di akhir query
// sehingga kalau di echo $sql nya akan sepert ini : (contoh ada 2 data product)
//INSERT INTO product(`Gambar`,`nama`,`harga`, `deskripsi`,`terjual`,`stock`,`kategori`) VALUES (rows*7),(rows*7)
$sql = substr($sql, 0, strlen($sql) - 1).";";

//EkSEKUSI query nya
$result = mysqli_query($market,$sql);

// print_r($result);
// print_r($sql);
// print_r($market);

//Kita Buat if else apabila Nilai $result = 1, ketika $result bernilai 1, artinya data berhasil di masukkan ke dalam mysql
if($result = 1){
    echo "<script>alert('Data Berhasil Disimpan');window.location = 'dash.php?page=tabel';</script>";
}else{
    echo "<script>alert('Data Gagal Disimpan');window.location = 'dash.php?page=tabel';</script>";
}




?>