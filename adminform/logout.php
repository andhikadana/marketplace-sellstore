<?php
//mengaktifkan session
session_start();
//menghapus semua session
session_destroy();
//mengalihkan halaman dengan pesan logout
header("Location: index.php?pesan=logout")
?>