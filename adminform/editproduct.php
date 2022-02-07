<!DOCTYPE html>
<html>
<head>
	<title>ANDA TELAH MASUK KEDALAM EDIT</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark">
	<h2><a href="dash.php?pagetabel">KEMBALI KE TABEL PRODUCT</a></h2>
	<br/>
	<br/>
	<!--Judul-->
	<!-- <div class="bg-info" align="center"> -->
	<!-- <h1 class="text-white">EDIT DATA PRODUCT</h1> -->
	<!-- </div> -->

	<?php
	include 'admin.php';
	$id = $_GET['id'];
	$data = mysqli_query($market,"SELECT`id`, `Gambar`, `nama`, `harga`,`kategori`, `deskripsi`, `terjual`, `stock`  FROM product WHERE id='$id'");
	while($b = mysqli_fetch_array($data)){
		?>
	<div class="container-md shadow-sm bg-info" align="center" style="border-radius: 1%;">
		<form method="post" action="updateproduct.php">
			<div class="bg-info" align="center">
				<h1 class="text-dark">EDIT DATA PRODUCT</h1>
			</div>
			<table class="table table-hover">
				<tr>			
					<td>Gambar</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $b['id']; ?>">
						<input type="text"class="form-control" name="Gambar" placeholder="Masukkan Gambar" value="<?php echo $b['Gambar']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo $b['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga" class="form-control" placeholder="Masukkan Harga" value="<?php echo $b['harga']; ?>"></td>
				</tr>
                <tr>
				<div class="md-form">
					<td>Deskripsi</td>
					<td><textarea type="text" name="deskripsi" id="form7"  class="md-textarea form-control" placeholder="Masukkan Deskripsi" rows="3"><?php echo $b['deskripsi']; ?></textarea></td>
				</div>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" value="<?php echo $b['kategori']; ?>"></td>
				</tr>
                <tr>
					<td>Terjual</td>
					<td><input type="number" name="terjual" class="form-control" placeholder="Masukkan Terjual" value="<?php echo $b['terjual']; ?>"></td>
				</tr>
                <tr>
					<td>Stock</td>
					<td><input type="number" name="stock" class="form-control" placeholder="Masukkan Stock" value="<?php echo $b['stock']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="bg-success btn-lg" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</div>
</body>
</html>