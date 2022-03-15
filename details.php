<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>details</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<br>
<br>
<br>
<?php 
include 'koneksi1.php';
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
$data = mysqli_query($tambah,'SELECT `id`, `Gambar`, `nama`, `harga`, `deskripsi`, `kategori` FROM product WHERE id='.$id);
$varian = mysqli_query($tambah,"SELECT `id`, `produk_id`, `varian` FROM produk_varian WHERE produk_id='$id' ");
while($b = mysqli_fetch_assoc($data)){
    ?>
<body style="background-color: rgba(245, 245, 245, 0.74);">
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <div class="container text left">
        <div class="row">
            <div class="col-12 col-xs-12 col-md-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card rounded shadow-sm border-1">
                    <img class="card-img-top"
                        src="<?php echo $b['Gambar'];?>"
                        alt="Card image cap">
                        <div class="card-body text-dark">
                        <h5 class="card-title text-truncate"><?php echo $b['nama'];?></h5>
                        <h6 class="card-title text-danger">Rp. <?php echo number_format($b['harga'],0,",",".");?></h6>
                        <h6 class="card-text text-truncate"><small><?php echo $b['deskripsi'];?></small></h6>
                    </div>
                </div></a>
            </div>
            
            <div class="col-12 col-xs-12 col-md-12 col-md-6 col-lg-6 col-xl-6">
                <div class="mt-10 card rounded shadow-sm border-1" >
                    <div class="card-body text-dark">
                        <h5>Deskripsi produk</h5><br><br/>
                        <h6><?php echo $b['nama'];?></a></h6>
                        <br>
                        <h6>Kategori = <a href="index.php?page=<?php echo $b['kategori'];?>"><?php echo $b['kategori'];?></a></h6>
                            <br>
                        <h6>Fatures :</h6>
                            <ul>
                                <li><?php echo $b['deskripsi'];?></li>
                            </ul>
                            <br>
                            <br/>
                            <br>
                        </p><br>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-md-12 col-md-2 col-lg-2 col-xl-2">
                <div class="mt-10 card rounded shadow-md border-1" >
                <div class="card-body text-dark">
                    <h6 class='card-text' align='center'>Pilih Varian</h6>
                    <p class="card-text text-disabled">Warna<br>
                        <select  style="width: 130px; height: 35px;">
                        <?php while($a = mysqli_fetch_assoc($varian)){
                            ?>
                            <option><?php echo$a['varian']?></option>
                       <?php  }
                       ?>     
                        </select>
                    </p>
                    <div align='center'>
                      <a href="http://wa.me/6289526923741?text=<?php echo urlencode("saya ingin membeli barang ini ".$b['nama'] ."\n". $urln )?>">
                        <h6 class="btn btn-success text-white">Beli Sekarang</h6>
                      </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php }
?>
</body>
</html>
