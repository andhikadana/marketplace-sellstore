<?php
$id = $_GET['id'];
$aksi = "DELETE FROM admin WHERE id='$id'";
mysqli_query($admin,$aksi);
header("Location: index.php");
?> 