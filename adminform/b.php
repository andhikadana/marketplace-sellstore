<div id="layoutSidenav_content">
                <main>
                    <div class="col-lg-12 bg-dark" style="color: lime;" align='center'>
                        <?php

                        date_default_timezone_set('Asia/Jakarta');
                        include 'admin.php';
                        $dtb = "SELECT * FROM product";
                        $brg = mysqli_query($market,$dtb);
                        $jumlah_brg = mysqli_num_rows($brg);
                        ?>
                        <span id="jam"></span>
                    </div>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Barang <?= $jumlah_brg;?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dash.php?page=tabel">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Peringatan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Pengunjung <?php include '../visitor.txt';?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Penurunan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <th class='text-truncate'>Deskripsi</th>
                                            <th>Terjual</th>
                                            <th>Stock</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'admin.php';
                                     $no = 1;
                                     $data = mysqli_query($market,"SELECT * FROM product");
                                     while($b = mysqli_fetch_object($data)){
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><img src="<?php echo $b->Gambar;?>" style="width: 80px; height: 80px;"></td>
                                            <td><?php echo $b->nama;?> </td>
                                            <td><?php echo $b->harga;?> </td>
                                            <td>
                                              <textarea style="overflow: scroll;"><?php echo $b->deskripsi;?></textarea></td>
                                            <td><?php echo $b->terjual;?> </td>
                                            <td><?php echo $b->stock;?> </td>
                                            <td>
                                                <a class="btn btn-lg bg-success text-decoration-none text-dark" href="editproduct.php?id=<?php echo $b->id; ?>">EDIT</a><br/>
                                                <button class="btn btn-lg bg-danger text-decoration-none text-dark" data-toggle="modal" data-target="#exampleModalCenter">HAPUS</button>
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Penghapusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin Menghapus Barang Ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-danger text-white" href="hapusproduct.php?id=<?= $b->id; ?>">Hapus</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
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
        <script>
            let jam= document.getElementById("jam");
            setInterval(function () {
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                var hh = today.getHours();
                var minute = today.getMinutes();
                var detik = today.getSeconds();

                today = mm + '/' + dd + '/' + yyyy + "<br>" + hh + ":" + minute + ":" + detik;
                
                jam.innerHTML = today;
            },1000);
        </script>