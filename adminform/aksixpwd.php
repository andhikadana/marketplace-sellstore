<?php 
session_start();
//include database
include 'LOGIN/admin.php';

//menagkap data
$username = $_POST['username'];
$email = $_POST['email'];

//menyeleksi data dari dtabase
$data = mysqli_query($admin,"SELECT`id`,`username`,`email` FROM admin WHERE username='$username' AND email='$email'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = mysqli_fetch_assoc($data);
    $_SESSION['status'] == 'login';
    header("Location: gantipwd.php");
}else{
    header("Location: forgetpas.php?pesan=salah");
}
?>