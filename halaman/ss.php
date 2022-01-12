<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://placeimg.com/640/480/arch/sepia" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placeimg.com/640/480/nature" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <br>
    <br>
    <div class="container">
        <div class="row pb-1 mb-1">
        <?php 
        $batas = 16;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
   
        $previous = $halaman - 1;
        $next = $halaman + 1;

        $data = mysqli_query($tambah,"SELECT`Gambar`, `nama`, `harga`, `deskripsi`, `terjual`, `stock` FROM product");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

		$data = mysqli_query($tambah,"SELECT * FROM product LIMIT $halaman_awal, $batas");
        $no = $halaman_awal + 1;
		while($b = mysqli_fetch_array($data)){
			?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?php echo $b['id'];?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?php echo $b['Gambar']; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?= $b["nama"];?></p>
                        <h6 class="card-subtitle text-danger">Rp <?= number_format($b["harga"],0,",",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?= $b["deskripsi"];?></small>
                        </p>
                        <a class="card-link">Terjual:<?= $b['terjual']?></a>
                        <a class="card-link">Stock:<?= $b['stock']?></a>
                    </div>
                </div></a>
            </div>
            <?php } 
            ?>
            <br>
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" <?php if($halaman>1){ echo "href='?halaman=$previous'"; } ?>>Previos</a>
                            </li>
                            <?php 
                            for($x=1;$x<=$total_halaman;$x++){
                                ?>
                            <li class="page-item">
                                <a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                            </li>
                            <?php }
                            ?>
                            <li class="page-item">
                                <a class="page-link" <?php if($halaman < $total_halaman){ echo "href='?halaman=$next'"; } ?>>Next</a>
                            </li>
                        </ul>
                    </nav>


