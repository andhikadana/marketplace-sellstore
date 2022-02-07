
<head>
	<script src="../../multiple-insert/jquery.min.js" type="text/javascript"></script>
</head>
<form action="" method="post" >
    <table>
            <tr>		
				<td>produk_id</td>
				<select name="id">
				<option value="">Select Product</option>
				<?php
					include 'koneksi.php';
					$func = "SELECT`id`, `nama` FROM product";
					$ax = mysqli_query($market,$func);
					while($k = mysqli_fetch_assoc($ax)){
				?>
				<option value="<?= $k['id'];?>" name="id" ><?= $k['nama'] . "----------------" . $k['id']; ?></option>
				<?php } ?>
				</select>
			</tr>
			<td>Varian</td>
				<td><input type="text" name="varian" class="form-control" placeholder="Masukkan Varian" required></td>
			</tr>
			<td><input class="bg-success btn-lg" type="submit" value="Submit" ></td>	
			</tr>
</table>
</form>
<?php
$id = $_POST['id'];
$varian = $_POST['varian'];
$sql = "INSERT INTO produk_varian(`produk_id`,`varian`) VALUES('$id','$varian')";
$query = mysqli_query($market,$sql);
?>
	<!-- <script>
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
	</script> -->

