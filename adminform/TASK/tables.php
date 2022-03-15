
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="D" content="" />
        <title>Tables</title>
        <script src="../js/jquery.min.js"></script> 
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
            <div id="layoutSidenav_content" class="bg-white">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dash.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4 bg-white text-dark">
                            <div class="card-body">
                                <h2  class='text-dark'>Informasi Tentang Data Barang</h2>
                            </div>
                        </div>
                        <div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <table class="table-hover">
                                <td><i class="fas fa-table me-1"></i> Data Barang &nbsp</td>
                                <td><input type="checkbox">Pilih Semua</td>
                                <td><a class="btn btn-primary text-white text-decoration-none text-center" href="tambahbrg.php"><i class="fas fa-plus-square"></i> Tambah Barang</a></td>
                                <td><a href="multiinsert.php" class="btn btn-primary text-decoration-none">Tambah Barang Banyak <i class="fas fa-plus-square"></i></a></td>
                                </table>
                            </div>
                            <div class="card-body">
                            <form id="form-delete" method="get" action="deletemulti.php">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Terjual</th>
                                            <th>Stock</th>
                                            <th>EDIT</th>
                                            <th>HAPUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'admin.php';
                                     $no = 1;
                                     $data = mysqli_query($market,"SELECT `id`, `Gambar`, `nama`, `harga`, `deskripsi`, `kategori`, `terjual`, `stock` FROM product");
                                     while($b = mysqli_fetch_assoc($data)){
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="check-item" name="id[]" value="<?= $b['id']; ?>"></td>
                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= $b['Gambar'];?>" style="width: 80px; height: 80px;"></td>
                                            <td><?= $b['nama'];?> </td>
                                            <td><?= number_format($b['harga'],0,",",".");?> </td>
                                            <td><?php echo substr($b['deskripsi'],0,10);?></td>
                                            <td><?= $b['kategori'];?></td>
                                            <td><?= $b['terjual'];?> </td>
                                            <td><?= $b['stock'];?> </td>
                                            <td><a class="btn btn-sm bg-success text-decoration-none text-white icon" href="TASK/editproduct.php?id=<?= $b['id']; ?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a class="btn btn-sm bg-danger text-decoration-none text-white icon" href="TASK/hapusproduct.php?id=<?= $b['id']; ?>" onclick="return confirm('Yakin Hapus?' )"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-lg bg-danger text-dark" value="Hapus Banyak" id='submit'>
                                     </form>
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
    <script>
        $(document).ready(function(){
            $('#check-all').click(function(){
                if($(this).is(':checked'))
                  $('.check-item').prop('checked', true);
                else
                $('.check-item').prop('checked', false);
            });

            $("#submit").click(function(){
                var confirm = window.confirm('Apakah anda Yakin Ingin Menghapus Data data ini?');

                if(confirm)
                 $('#form-delete').submit();
            });
        });
    </script>
