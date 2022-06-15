<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Login Akun MyHotel</title>
  <link href="assets/images/myhotelLogo.png" rel="shortcut icon" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <style>
    body {
      background-image: url('assets/images/myhotelpictures.jpg');
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="content-wreaper">
    <div class="text-center">
      <h2 style="font-family: sans-serif; font-size: 30px;">Selamat Datang Di MyHotel</h2>
    </div>
    <hr class="text-white"/>
    <br/>
    <div class="text-center">
      <h2 style="font-family: sans-serif; font-size: 20px;">Silahkan Login Akun MyHotel</h2>
    </div>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-dark">
            <div class="card-header text-center">
                <a href="" class="h1" style="font-family: sans-serif;"><b>Login</b> MyHotel</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg" style="font-size: 20px;">Login Your Account</p>

                <form action="cek_login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <br/>
                <div class="text-center">
                    <a href="index.php" class="btn btn-dark btn-block">Kembali Ke Beranda</a>
                </div>
              </div>
            </div>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>

</body>

</html>