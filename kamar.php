<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | karegori Kamar</title>
  <link href="assets/images/myhotelLogo.png" rel="shortcut icon" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a href="#" class="navbar-brand">
        <img src="assets/images/myhotelLogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light" style="font-family: sans-serif; font-size: 25px;">MyHotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link">Kamar</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br/>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-family: sans-serif; font-size: 35px;"> Kategori Kamar </h1>
              <hr/>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <?php
          $query = "SELECT * FROM kamar ORDER BY id_kamar ASC";
          $result = mysqli_query($koneksi, $query);
          if (!$result) {
            die("Query Error: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
          }

          $no = 1;

          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-12">
              <div class="card card-outline card-dark">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card-body card-outline">
                        <table>
                          <tr>
                            <td><b>Tipe Kamar :</b> <?php echo $row['tipe_kamar']; ?></td>
                          </tr>
                          <tr>
                            <td><b> Kamar Yang Tersedia :</b> <?php echo $row['stock_kamar']; ?> Kamar </td>
                          </tr>
                          <tr>
                            <td> 
                              <b>Fasilitas :</b> <br>                             
                              <?php 
                              $fasilitas_kamar = mysqli_query($koneksi, "select * from fasilitas_kamar");
                              while ($a = mysqli_fetch_array($fasilitas_kamar)) {
                                if ($a['id_kamar'] == $row['id_kamar']) { ?>
                                  <?php echo $a['fasilitas']; ?>
                                  <?php
                                }
                              }
                              ?> 
                            </td>
                          </tr>
                          <tr>
                            <td><b><h1>Harga :</h1></b> <h1>Rp.<?php echo $row['harga']; ?>/mlm</h1></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card-body card-outline">
                        <img class="d-block w-100" src="admin/gambar/<?php echo $row['foto']; ?>" height="300">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $no++; } ?>

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

     <!-- Main Footer -->
      <!--<footer class="main-footer">-->
        <!-- To the right -->
        <!--<div class="float-right d-none d-sm-inline">
          Anything you want
        </div>-->
        <!-- Default to the left -->
        <!--<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>
    </div>-->
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>