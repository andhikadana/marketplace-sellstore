<?php 
if(isset($_POST['search'])) {
    include 'koneksi1.php';

    $search = $_POST['search'];

    $query = mysqli_query($tambah,"SELECT`id`,`Gambar`,`nama`,`harga`,`deskripsi`,`terjual`,`stock` FROM product WHERE nama LIKE '%" . $search . "%'");
    while($b = mysqli_fetch_object($query)){
?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?= $b->id;?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?php echo $b->Gambar; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?= $b->nama;?></p>
                        <h6 class="card-subtitle text-danger">Rp <?= number_format($b->harga,0,",",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?= $b->deskripsi;?></small>
                        </p>
                        <a class="card-link">Terjual:<?= $b->terjual?></a>
                        <a class="card-link">Stock:<?= $b->stock?></a>
                    </div>
                </div></a>
            </div>
<?php
    }
}
?>
