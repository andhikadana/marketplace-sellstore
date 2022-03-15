<?php
include 'admin.php';
//tankap data dari for
$username = addslashes($_SESSION['username']);
$password = md5($_POST['password']);
//penggantian password
mysqli_query($admin,"UPDATE admin SET password='$password' WHERE id={$username['id']}");
unset($_SESSION);

header("Location:index.php")
?>