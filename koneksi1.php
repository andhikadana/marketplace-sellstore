<?php 

$tambah = mysqli_connect("localhost","root","","marketplace");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

