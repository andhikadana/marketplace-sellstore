<?php

include 'admin.php';

$nama = $_SESSION['username'];

$sql = "SELECT`id`, `username` FROM admin WHERE username='$nama'";
$data = mysqli_query($admin,$sql);

while($b= mysqli_fetch_assoc($data)){
?>
<head>
    <title>Settings</title>
<head>
<div class="container">
    <div class="row">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 bg-danger"></div>
        <div clas="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <br/><br><br>
            <h2 align="center"><i class="fas fa-user fa-fw" style="font-size: 55px;"></i></h2>
            <h4 align="center"><?= $nama ?></h4>      
            <br/>
            <form action="" method="post" >
            <table class="table table-hover text-center" align="center">
                <tr>
                    <th>OPSI</th>
                </tr>
                <tr><td><input class="btn btn-danger" href="dash.php?page=setting?id=<?= $b['id']?>" value="HAPUS AKUN ID <?= $b['id']?>"></td></tr>
                <?php }?>
            </table>
            </form>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 bg-primary"></div>
    </div>
</div>


