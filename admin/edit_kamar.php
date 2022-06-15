<?php 
include '../koneksi.php';

if (isset($_GET['id_kamar'])) {
  $id_kamar = ($_GET['id_kamar']);
  $query = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
  $result = mysqli_query($koneksi, $query);
  if (!$result) {
    die('Query Error: '.mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
  }
  $data = mysqli_fetch_assoc($result);
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan di database');window.location='kamar.php';</script>";
  }
} else {
  echo "<script>alert('Masukan Data');window.location='kamar.php';</script>";
}

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Edit Data Kamar</title>
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
    <br/>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-family: sans-serif; font-size: 30px;">Edit Data kamar</h1>
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
              <div class="card-header">
                <h3 class="text-center" style="font-family: sans-serif; font-size: 25px;">--- Edit Data Kamar ---</h3>
              </div>
              <div class="card-body">
                <form method="post" action="update_kamar.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Tipe Kamar</label>
                    <select name="tipe_kamar" class="form-control">
                <option value="">--- Pilih Tipe Kamar ---</option>
                <option value="Standart Room">Standart Room</option>
                <option value="Suite Room">Suite Room</option>
                <option value="Deluxe Room">Deluxe Room</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> - Foto Kamar </label>
                    <img class="d-block" src="gambar/<?php echo $data['foto']; ?>" width="200">
                    <input type="file" name="foto" class="form-control">
                  </div>
                  <div class="form-group">
                    <label> - Harga </label>
                    <input name="id_kamar" value="<?php echo $data['id_kamar']; ?>" hidden>
                    <input type="text" class="form-control" value="<?php echo $data['harga']; ?>" name="harga" placeholder="harga ">
                  </div>
                  <div class="form-group">
                    <label> - Jumlah Kamar </label>
                    <input name="id_kamar" value="<?php echo $data['id_kamar']; ?>" hidden>
                    <input type="text" class="form-control" value="<?php echo $data['jumlah_kamar']; ?>" name="jumlah_kamar" placeholder="jumlah Kamar">
                  </div>
                  <div class="form-group">
                    <label> - Stock Kamar </label>
                    <input name="id_kamar" value="<?php echo $data['id_kamar']; ?>" hidden>
                    <input type="text" class="form-control" value="<?php echo $data['stock_kamar']; ?>" name="stock_kamar" placeholder="Stock Kamar">
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark"> Update Data kamar </button>
                      <a href="kamar.php" class="btn btn-dark col-2"> Cancel </a>
                    </div>
                  </div>
                </form>
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