<?php
include 'koneksi1.php';
require 'hitcounter.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sellstore</title>
    <link rel="stylesheet" href="cssm/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="position.css">
    <link rel="stylesheet" href="cssm/nav.css">
    <link rel="stylesheet" href="cssm/nav.js">
	<link rel="stylesheet" href="cssm/kontak.css">
</head>

<body>

<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                
                    <a class="navbar-brand" href="index.php"><b>Sellstore</b><a>	
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle na"vigation>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link " href="index.php?page=home">Home</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index.php?page=portofolio">Portfolio</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 disabled">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Not Avalaible Now</a>
                                    <a class="dropdown-item" href="#">Not Avalaible Now</a>
                                    <a class="dropdown-item" href="#">Not Avalaible Now</a>
                                    <a class="dropdown-item" href="#">Not Avalaible Now</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index.php?page=contact">Contact</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <p class="nav-link">
                                    <?php $hit = new HitCounter(); $hit->Hitung(); echo 'Jumlah pengunjung : ' . $hit->tampil();  ?>
                                </p>
                            </li>
                        </ul>
                    </div> 
                </nav>		
            </div>
        </div>
    </div>
</div>
<br>

<?php 
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include "halaman/ss.php";
            break;
        case 'portofolio' :
            include "halaman/portofolio.php";
            break;
        case 'contact' :
            include "halaman/contact.php";
            break;
        case 'mail' :
            include "halaman/mail.php";
            break;
        case 'detail' :
            include "details.php";
        default:
            echo "";
            break;
    }
}else{
    include "halaman/ss.php";
}
?>


</body>
</html>
