<?php
session_start();
//include database
include 'admin.php';
//menangkap data yang dikirim dari form

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

//menyeleksi data dari database
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($admin,"select * from admin where username='$username' and email='$email'and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("Location:../dash.php");
}else{
	header("Location:index.php?pesan=gagal");
}
?>


