<?php
      session_start();
      if($_SESSION['status']!="login"){
      header("Location:index.php?pesan=belum_login");
      }
?>
<head>
	<script src="js/jquery.min.js" type="text/javascript"></script>
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
    #reset-form{
        background-color:lime;
    }
</style>
</head>
<form action="" method="post" >
<hr>
	<button id="btn-tambah-form"><i class="far fa-plus-square"></i> Tambah Form</button>
	<button id="reset-form">Reset Form <i class="fas fa-recycle"></i></button><br>
    <table>
		<tr>
			<td><b>Data Ke 1</b></td>
		</tr>
            <tr>		
				<td>produk_id</td>
				<td><select name="id[]">
				<option value="">Select Product</option>
				<?php
					include 'koneksi.php';
					$func = "SELECT`id`, `nama` FROM product";
					$ax = mysqli_query($market,$func);
					while($k = mysqli_fetch_assoc($ax)){
				?>
				<option value="<?= $k['id'];?>" ><?= $k['nama'] . "----------------" . $k['id']; ?></option>
				<?php } ?>
				</select></td>
			</tr>
			<tr>
			<td>Varian</td>
				<td><input type="text" name="varian[]" class="form-control" placeholder="Masukkan Varian"></td>
			</tr>
</table>
<br>

<div id="insert-form"></div>

<hr>
<input type="submit" class="submit" value="SUBMIT">
</form>

<input type="hidden" id="jumlah-form" value="1">

	<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
			
			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append("<table>" + "<tr>"+ "<td><b> Data ke " + nextform + "</b>" +
				"</tr>" +
				"<tr>" +
				"<td>produk_id</td>" +
				"<td><select name='id[]'>" +
				"<option value=''>Select Product</option>" + "<?php
					$func = 'SELECT`id`, `nama` FROM product';
					$ax = mysqli_query($market,$func);
					while($k = mysqli_fetch_assoc($ax)){
				?>" +
				"<option value='<?= $k['id'];?>'><?= $k['nama'] . '----------------'. $k['id']; ?>'</option>" +
				"<?php } ?>" + 
				"</select></td>" +
				"</tr>" +
				"<tr>" +
				"<td>varian</td>" +
				"<td><input type='text' name='varian[]' class='form-control' required></td>" +
				"</tr>" +
				"</table>" +
				"<br>");
			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});
		
		// Buat fungsi untuk mereset form ke semula
		$("#reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>

	<?php
$id = $_POST['id'];
$varian = $_POST['varian'];
$sql = "INSERT INTO produk_varian(`produk_id`,`varian`) VALUES";
$no = 0;
foreach($id as $dtnm){
    $sql .= "('".$dtnm."','".$varian[$no]."'),";
    $no++;
}
$sql = substr($sql, 0, strlen($sql) - 1).";";

$query = mysqli_query($market,$sql);



if($query == 1){
	echo "<script>alert('Anda Berhasil Menambahkan Varian ^-^ ')</script>";
}else{
	echo "<script>alert('Anda Gagal Menambahkan Varian T-T ')</script>";
}
?>

