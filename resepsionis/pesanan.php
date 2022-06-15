<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Resepsionis - Data Pesanan</title>
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
          <span class="brand-text font-weight-light" style="font-family: sans-serif; font-size: 25px;"> MyHotel </span>
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
              <a href="pesanan.php" class="nav-link">Pesanan</a>
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
              <h1 class="m-0" style="font-family: sans-serif; font-size: 30px;"> Data Innovice </h1>
              <hr/>
            </div><!-- /.col -->
       
          </div><!-- /.row -->
          <form method="GET" action="pesanan.php" style="text-align: left;">
                    <label>Search Innovice Berdasarkan Tanggal : </label>
                      <input type="date" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; }?>">
                      <button type="submit" class="btn btn-sm btn-dark col-2"> Search </button>        
                </form>
                <form method="GET" action="pesanan.php" style="text-align: left;">
                    <label> Search Innovice Berdasarkan Nama : </label>
                      <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; }?>">
                      <button type="submit" class="btn btn-sm btn-dark col-2"> Search </button>        
                </form>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      
      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card card-outline card-dark">
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
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <?php
                    include '../koneksi.php';
  

                    if(isset($_GET['cari'])){
                      $pencarian = $_GET['cari'];
                      $query = "select * from pesanan where nama_pemesan like '%".$pencarian."%' or cek_in like '%".$pencarian."%' or cek_out like '%".$pencarian."%'";
                    }
                    else {$query = "select * from pesanan";
                    }
                    

                    $no = 1;
                    $data = mysqli_query($koneksi, $query);
                    while($d = mysqli_fetch_array($data)){
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
                            <span class="badge bg-warning">Belum di Konfirmasi</span>
                          <?php } else { ?>
                            <span class="badge bg-success">Sudah di Konfirmasi</span>
                          <?php } ?>
                        </td>
                        <td>
                        <form action="aksi_konfirmasi.php" method="POST">
                            <input type="hidden" name="id_pesanan" value="<?php echo $d['id_pesanan']; ?>">
                            <input type="hidden" name="status" value="2">
                            <button class="btn btn-sm btn-dark">Konfirmasi</button>
                          </form>
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