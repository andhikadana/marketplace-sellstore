<?php
//koneksi database
include 'LOGIN/admin.php';

//menangkap form yang diisi
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
//input
$regist = mysqli_query($admin,"INSERT INTO admin(`username`,`email`,`password`) VALUES('$username','$email','$password')");
//

header("Location: LOGIN/index.php");
?>
