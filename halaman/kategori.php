
    <?php
             $page = $_GET['page'];
    ?>
<br/>
<br/>
<br/>
<div class="container">
<h4>kategori : <a href="index.php?page=<?php echo $page?>"><?php echo $page ?></a></h4>
        <div class="row pb-1 mb-1">
        <?php 
            $kategori = mysqli_query($tambah,"SELECT`id`, `Gambar`, `nama`, `harga`, `deskripsi`, `terjual`, `stock`, `kategori` FROM product WHERE kategori='$page'");
            while($k = mysqli_fetch_assoc($kategori)):
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?php echo $k['id'];?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?php echo $k['Gambar']; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?php echo $k['nama'];?></p>
                        <h6 class="card-subtitle text-danger">Rp <?php echo number_format($k['harga'],0,",",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?php echo $k['deskripsi'];?></small>
                        </p>
                        <a class="card-link">Terjual:<?php echo $k['terjual']?></a>
                    </div>
                </div></a>
            </div>
        <?php endwhile; ?>
        </div>
</div>