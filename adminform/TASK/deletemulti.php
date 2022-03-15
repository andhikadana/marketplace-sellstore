<?php
include 'admin.php';

$id = $_GET['id'];
mysqli_query($market,"DELETE FROM product WHERE id IN(".implode(",", $id).")");

header("Location: ../dash.php?page=tabel")
?>