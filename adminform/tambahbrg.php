<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Tambah Barang</title>
</head>
<center>
<body class="bg-dark">
<h1><a href="dash.php">Kembali Ke Dashboard</a></h1>
<div class="container-md shadow-sm bg-info" align="center" style="border-radius: 1%;">
<form method="post" action="aksi.php">
		<table class="table table-hover">
			<tr>			
				<td>Gambar</td>
				<td><input type="text" class="form-control" name="Gambar" placeholder="Masukkan Gambar"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" class="form-control" placeholder="Masukkan Harga" ></td>
			</tr>
            <tr>
			<div class="md-form">
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" id="form7" class="md-textarea form-control" placeholder="Masukkan Deskripsi" rows="3"></textarea></td>
			</div>
            </tr>
			<tr>
			<td>Kategori</td>
				<td><input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori" ></td>
			</tr>
			<tr>
				<td>Terjual</td>
				<td><input type="number" name="terjual" class="form-control" placeholder="Masukkan Terjual" ></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="number" name="stock" class="form-control" placeholder="Masukkan Stock" ><td>
			</tr><br/>
			<tr>
			<td><input class="bg-success btn-lg" type="submit" value="Submit" ></td>	
			</tr>		
		</table>
	</form>
</div>
<h1><a href="dash.php?page=tabel">Kembali Ke Tabel Product</a></h1>
</body>
</center>