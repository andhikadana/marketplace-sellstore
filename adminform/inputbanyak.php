<?php
session_start();
if($_SESSION['status']!="login"){
    header("Location:index.php?pesan=belum_login");
}
?>
<html>
<head>
<title>input banyak</title>
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<style>
    body{
        background-image: linear-gradient(90deg, yellow, aqua, crimson); 
    }
    .submit{
       background-color:aqua;
    }
    #btn-tambah-form{
        background-color:salmon;
    }
    #btn-reset-form{
        background-color:lime;
    }
</style>
</head>
<body>
    <hr>
    <form method="post" action="multiinsert.php">
        <button id="btn-tambah-form"><i class="far fa-plus-square"></i> Tambah Form</button>
        <button id="btn-reset-form">Reset <i class="fas fa-recycle"></i></button><br><br>
        <b>Data ke : 1</b>
      <table>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="Gambar[]" placeholder="Masukkan Gambar" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama[]" placeholder="Masukkan Nama" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga[]" placeholder="Masukkan Harga" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi[]" placeholder="Masukkan Deskripsi" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori[]" placeholder="Masukkan kategori" required></td>
            </tr>
            <tr>
                <td>Terjual</td>
                <td><input type="number" name="terjual[]" placeholder="Masukkan terjual" required></td>
            </tr>
            <tr>
                <td>Stock</td>
                <td><input type="number" name="stock[]" placeholder="Masukkan stock" required></td>
            </tr>
      </table><br><br>
      
    <div id='insert-form'></div>

    <hr>
      <input type="submit" class="submit" value="SUBMIT"> 
    </form>

    <input type='hidden' id='jumlah-form' value='1'>

    <script>
        $(document).ready(function(){
            $("#btn-tambah-form").click(function(){
                var jumlah = parseInt($("#jumlah-form").val());
                var nextform = jumlah + 1;

                $("#insert-form").append("<b>Data ke : " + nextform + "</b>" +
                "<table>" + 
                "<tr>" + 
                "<td>Gambar</td>" +
                "<td><input type='text' name='Gambar[]' placeholder='Masukkan Gambar' required></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>Nama</td>" +
                "<td><input type='text' name='nama[]' placeholder='Masukkan Nama' required></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>Harga</td>" +
                "<td><input type='number' name='harga[]' placeholder='Masukkan Harga' required></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>deskripsi</td>" +
                "<td><textarea name='deskripsi[] rows='3' placeholder='Masukkan Deskripsi' required></textarea></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>Kategori</td>" +
                "<td><input type='text' name='kategori[]' placeholder='Masukkan kategori' required></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>Terjual</td>" +
                "<td><input type='number' name='terjual[]' placeholder='Masukkan terjual' required></td>" +
                "</tr>" +
                "<tr>" + 
                "<td>Stock</td>" +
                "<td><input type='number' name='stock[]' placeholder='Masukkan stock' required></td>" +
                "</tr>" +
                "</table>" +
                "<br><br>");

                $("#jumlah-form").val(nextform);
            });
            //function reset
            $("#btn-reset-form").click(function(){
                $("#insert-form").html("");
                $("#jumlah-form").val("1");
            });
        });
    </script>
</body>
</html>