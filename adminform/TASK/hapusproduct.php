<?php
include 'admin.php';
$id = $_GET['id'];
mysqli_query($market,"delete from product where id='$id'");
header("Location: ../dash.php?page=tabel");
?>