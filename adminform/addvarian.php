<head>
	<script src="../../multiple-insert/jquery.min.js" type="text/javascript"></script>
</head>
<form action="" method="post" >
<button type="button" id="btn-tambah-form">Tambah Data Form</button>
    <table>
            <tr>		
				<td>produk_id</td>
				<td><input type="number" class="form-control" name="id[]" placeholder="Masukkan id" required></td>
			</tr>
			<td>Varian</td>
				<td><input type="text" name="varian[]" class="form-control" placeholder="Masukkan Varian" required></td>
			</tr>
			<td><input class="bg-success btn-lg" type="submit" value="Submit" ></td>	
			</tr>
</table>
</form>
<?php
include 'koneksi.php';
$id = $_POST['id'];
$varian = $_POST['varian'];
$sql = "INSERT INTO produk_varian(`produk_id`,`varian`) VALUES('$id','$varian')";
$query = mysqli_query($conn,$sql);
?>
	<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
			
			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
				"<table>" +
				"<tr>" +
				"<td>produk_id</td>" +
				"<td><input type='number' name='id[]' required></td>" +
				"</tr>" +
				"<tr>" +
				"<td>varian</td>" +
				"<td><input type='text' name='varian[]' required></td>" +
				"</tr>" +
				"</table>" +
				"<br><br>");
			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>

