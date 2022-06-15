<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Bukti Pesanan</title>
  <link href="assets/images/myhotelLogo.png" rel="shortcut icon" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark">
      <div class="container">
        <a href="assets/index3.html" class="navbar-brand">
          <img src="assets/images/myhotelLogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light" style="font-family: sans-serif; font-size: 20px;">MyHotel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link"> Back To Home </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <a href="" class="navbar-brand">
        <span class="brand-text font-weight-light">Bukti Reservasi Kamar</span>
        <div class="col-sm-1">
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-auto">
        </ul>
      </div>
    </div>

    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0 text-center" style="font-size: 30px;">Bukti Pesanan</h1>
              <hr />
              <button onclick="cetak()" class="btn btn-dark float-center" style="margin: 5px;">
                <i class="fas fa-print"></i> Print Bukti Innovice
              </button>
              <br />
              <br />
              </form>
              <form method="GET" action="buktipesan.php" style="text-align: left;">
                <label>Search Innovice Menurut Tanggal : </label>
                <input type="date" name="cari" value="<?php if (isset($_GET['cari'])) {
                                                        echo $_GET['cari'];
                                                      } ?>">
                <button type="submit" class="btn btn-sm btn-dark col-2"> Search </button>
              </form>
              <form method="GET" action="buktipesan.php" style="text-align: left;">
                <label>Search Innovice Menurut Nama : </label>
                <input type="text" name="cari" value="<?php if (isset($_GET['cari'])) {
                                                        echo $_GET['cari'];
                                                      } ?>">
                <button type="submit" class="btn btn-sm btn-dark col-2"> Search </button>
              </form>


            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->




      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr style="text-align:center">
                      <th style="width: 10px">No</th>
                      <th>Nama Pemesan</th>
                      <th>NIK</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>Tipe Kamar</th>
                      <th>Jumlah Kamar</th>
                      <th>Harga</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php
                    include 'koneksi.php';

                    if (isset($_GET['cari'])) {
                      $pencarian = $_GET['cari'];
                      $query = "select * from pesanan where nama_tamu like '%" . $pencarian . "%' or cek_in like '%" . $pencarian . "%' or cek_out like '%" . $pencarian . "%'";
                      $query = "select * from pesanan where nama_tamu like '%" . $pencarian . "%' or cek_in like '%" . $pencarian . "%' or cek_out like '%" . $pencarian . "%'";
                    } else {
                      $query = "select * from pesanan";
                    }


                    $no = 1;
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_pemesan']; ?></td>
                        <td><?php echo $d['NIK']; ?></td>
                        <td><?php echo $d['cek_in']; ?></td>
                        <td><?php echo $d['cek_out']; ?></td>
                        <td>
                          <?php
                          $kamar = mysqli_query($koneksi, "select * from kamar");
                          while ($a = mysqli_fetch_array($kamar)) {
                            if ($a['id_kamar'] == $d['id_kamar']) { ?>
                              <?php echo $a['tipe_kamar']; ?>
                          <?php
                            }
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          $kamar = mysqli_query($koneksi, "select * from pesanan");
                          while ($a = mysqli_fetch_array($kamar)) {
                            if ($a['id_pesanan'] == $d['id_pesanan']) { ?>
                              <?php echo $a['jml_kamar']; ?>
                          <?php
                            }
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          $kamar = mysqli_query($koneksi, "select * from kamar");
                          while ($a = mysqli_fetch_array($kamar)) {
                            if ($a['id_kamar'] == $d['id_kamar']) { ?>
                              <?php echo $a['harga']; ?>
                          <?php
                            }
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          if ($d['status'] == 1) { ?>
                            <span class="badge bg-warning"> Belum Di Konfirmasi </span>
                          <?php } else { ?>
                            <span class="badge bg-success"> Sudah Di Konfirmasi </span>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script type="text/javascript">
      function cetak() {
        window.addEventListener("load", window.print());
      }
    </script>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    <!-- To the right -->

    <!-- Default to the left -->

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