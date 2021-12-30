<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="D" content="" />
        <title>Tables</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
            <div id="layoutSidenav_content" class="bg-info">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dash.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4 bg-warning text-primary">
                            <div class="card-body">
                                <h2 align='center' class='text-dark'>Informasi Tentang Data Barang</h2>
                                <h4 align='center'><a href="tambahbrg.php">+ Tambah Barang</a></h4>
                            </div>
                        </div>
                        <div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Barang
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Terjual</th>
                                            <th>Stock</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'koneksi.php';
                                     $no = 1;
                                     $data = mysqli_query($conn,"SELECT * FROM product");
                                     while($b = mysqli_fetch_object($data)){
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $b->Gambar;?> </td>
                                            <td><?= $b->nama;?> </td>
                                            <td><?= $b->harga;?> </td>
                                            <td><?= $b->deskripsi;?></td>
                                            <td><?= $b->kategori;?></td>
                                            <td><?= $b->terjual;?> </td>
                                            <td><?= $b->stock;?> </td>
                                            <td>
                                                <a class="btn btn-lg bg-success text-decoration-none text-dark" href="editproduct.php?id=<?= $b->id; ?>">EDIT</a><br/>
			    		                        <a class="btn btn-lg bg-danger text-decoration-none text-dark" href="hapusproduct.php?id=<?= $b->id; ?>">HAPUS</a>
				                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sellstore 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
