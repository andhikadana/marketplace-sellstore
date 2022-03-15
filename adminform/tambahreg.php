<?php
//koneksi database
include 'admin.php';

//menangkap form yang diisi
$username = selection($_POST['_userName']);
$email = selection($_POST['_email']);
$password = md5($_POST['_passWord']);

function selection($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//input
$regist = mysqli_query($admin,"INSERT INTO admin(`username`,`email`,`password`) VALUES('$username','$email','$password')");
//

header("Location: index.php");
?>
