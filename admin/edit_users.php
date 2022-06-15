<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | User - Edit User</title>
  <link href="../assets/images/myhotelLogo.png" rel="shortcut icon" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a href="" class="navbar-brand">
        <img src="../assets/images/myhotelLogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light" style="font-family: sans-serif; font-size: 25px;">MyHotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link">Kamar</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link">Fasilitas Kamar</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas_hotel.php" class="nav-link">Fasilitas Hotel</a>
            </li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">Users</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->
    <hr/>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-family: sans-serif; font-size: 35px;"> Edit Data Users </h1>
              <hr/>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-dark">
              <div class="card-header text-center" style="font-family: sans-serif; font-size: 20px;">
                - Edit Data User -
              </div>
              <div class="card-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from users where id='$id'");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <form action="update_users.php" method="POST">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                      <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" value="<?php echo $d['password'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Level Users</label>
                      <select name="level" class="form-control" required>
                        <option value="">--- Pilih Level ---</option>
                        <option value="admin">Admin</option>
                        <option value="resepsionis">Resepsionis</option>
                      </select>
                    </div>
                    <div class="row">
                      <button type="submit" class="btn btn-dark col-3"> Update Data </button>
                      <div class="col-6"></div>
                      <a href="users.php" class="btn btn-dark col-3"> Cancel </a>
                    </div>
                  </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>


</body>
</html>