<br>
<br>
<br>
<div class="container">
<h4>Ini Hasil Pencarian Harga <span class="text-primary">Minimal(Rp <?php echo $_POST['minimum'];?>)</span> dan <span class="text-success">Harga Maksimal(Rp <?php echo $_POST['maksimum'];?>)</span></h4><br />
<div class="row pb-1 mb-1" >
<?php
include 'koneksi1.php';

$min = $_POST['minimum'];
$max = $_POST['maksimum'];

$sql = "SELECT `id`, `Gambar`, `nama`, `harga`, `deskripsi`, `kategori`, `terjual`, `stock` FROM product WHERE `harga` > '$min' AND `harga` < '$max'";
$result = mysqli_query($tambah,$sql);
while($a = mysqli_fetch_assoc($result)){

?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0"  style="width: 18rem;">
                <!-- Card-->
                <a href="index.php?page=detail&id=<?php echo $a['id'];?>">
                <div class="card rounded shadow-sm border-1 mb-1">
                    <img class="card-img-top"
                        src="<?php echo $a['Gambar']; ?>"
                        alt="Card image cap">
                    <div class="card-body">  
                        <p class="card-title text-truncate text-dark"><?php echo $a['nama'];?></p>
                        <h6 class="card-subtitle text-danger">Rp <?php echo number_format($a['harga'],0,".",".");?></h6>
                        <p class="card-text text-truncate text-dark"><small><?php echo $a['deskripsi'];?></small>
                        </p>
                        <a class="card-link">Terjual:<?php echo $a['terjual'];?></a>
                        <a class="card-link">Stock:<?php echo $a['stock']?></a>
                    </div>
                </div></a>
            </div>
<?php 
 }
?>
       </div>
</div>
