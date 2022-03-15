<?php
session_start();
//include database
include 'koneksi1.php';
//menangkap data yang dikirim dari form

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['username'])){
		$_SESSION['status'] == "kosong";
		header("Location: index.php?page=kosong");
	}else{
		$username = selection($_POST['username']);
		// check ketika ada pesan dan spasi
		if(!preg_match("/^[a-zA-Z-' ]*$/",$username)){
			$_SESSION['status'] == "not_allowed";
			header("Location: index.php?page=not_allowed");;
		}
	}
	if(empty($_POST['email'])){
		$_SESSION['status'] == "kosong";
		header("Location: index.php?page=kosong");
	}else{
		$email = selection($_POST['email']);
		// check ketika ada pesan dan spasi
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$_SESSION['status'] == "not_allowed";
			header("Location: index.php?page=not_allowed");;
		}
	}
	if(empty($_POST['password'])){
		$_SESSION['status'] == "kosong";
		header("Location: index.php?page=kosong");
	}else{
		$password = md5($_POST['password']);
		// check ketika ada pesan dan spasi
	}
}
function selection($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//menyeleksi data dari database
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($admin,"select * from admin where username='$username' and email='$email'and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("Location:dash.php");
}else{
	header("Location:index.php?pesan=gagal");
}
?>


