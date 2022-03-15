<br>
<br>
<br>
<div class="container">
    <div class="row">
        <h6 align="justify" class="text text-white">Harga</h6>
            <form action="index.php?page=average" class="form-group" method="post">
            <input class="form-control col-8 col-md-8 col-lg-2" type="text" name="minimum" placeholder="Harga Minimum"><br>
            <input class="form-control col-8 col-md-8 col-lg-2" type="text" name="maksimum" placeholder="Harga Maksimum"><br>
            <input class="btn btn-primary" type="submit" value="CARI">
            </form>
    </div>
</div>
<div class="container">
<div class="row pb-1 mb-1" >
<?php 
    include 'koneksi1.php';

    $search = $_POST['search'];

    $query = mysqli_query($tambah,"SELECT`id`,`Gambar`,`nama`,`harga`,`deskripsi`,`terjual`,`stock` FROM product WHERE nama LIKE '%" . $search . "%'");
    while($b = mysqli_fetch_assoc($query)){
?>

            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?php echo $b['id'];?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?php echo $b['Gambar']; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?php echo $b['nama'];?></p>
                        <h6 class="card-subtitle text-danger">Rp <?php echo number_format($b['harga'],0,",",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?php echo $b['deskripsi'];?></small>
                        </p>
                        <a class="card-link">Terjual:<?php echo $b['terjual'];?></a>
                        <a class="card-link">Stock:<?php echo $b['stock'];?></a>
                    </div>
                </div></a>
            </div>
<?php
    }
?>
</div>
</div>
