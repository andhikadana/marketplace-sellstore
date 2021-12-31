<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/logres.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>
<body> 
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <br>
                <i class="fa fa-key" style="font-size:70px;color:#0DB8DE"></i>
                </div>
                <div class="col-lg-12 login-title">
                    Register Account
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="tambahreg.php">
                            <div class="form-group">
                                <label class="form-control-label">Masukkan Nama</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Masukkan Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Masukkan Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-12 login-btm login-text">
                                </div>
                                <div class="col-lg-12 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div align='center' class="col-lg-12 col-md-12 text-primary"><p><a href="LOGIN/index.php">Sudah Punya Akun?Login</a></p></div>
            </div>
        </div>
        <br/>
        <br/>
</body>
</html
