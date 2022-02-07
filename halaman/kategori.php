
    <?php
             $page = $_GET['page'];
    ?>
<br/>
<br/>
<br/>
<h4>kategori : <a href="index.php?page=earphone"><?= $page ?></a></h4>
<div class="container">
        <div class="row pb-1 mb-1">
        <?php 
            $earphone = mysqli_query($tambah,"SELECT`id`, `Gambar`, `nama`, `harga`, `deskripsi`, `terjual`, `stock`, `kategori` FROM product WHERE kategori='$page'");
            while($e = mysqli_fetch_assoc($earphone)):
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?= $e['id'];?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?= $e['Gambar']; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?= $e['nama'];?></p>
                        <h6 class="card-subtitle text-danger">Rp <?= number_format($e['harga'],0,",",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?= $e['deskripsi'];?></small>
                        </p>
                        <a class="card-link">Terjual:<?= $e['terjual']?></a>
                        <a class="card-link">kategori:<?= $e['kategori']?></a>
                    </div>
                </div></a>
            </div>
        <?php endwhile; ?>
        </div>
</div>