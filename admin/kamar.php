<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Admin - Data kamar</title>
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
              <h1 class="m-0" style="font-family: sans-serif; font-size: 30px;"> Data Kamar </h1>
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
              <div class="card-header text-center">
                <button class="btn btn-sm btn-dark" data-toggle="modal" data-target="#tambahkamar">Tambah Data kamar</button>
              </div>
              <div class="card-body">
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Tipe Kamar</th>
                      <th>Foto</th>
                      <th>Harga</th>
                      <th>Jumlah Kamar</th>
                      <th>Stock Kamar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../koneksi.php';
                    $query = "SELECT * FROM kamar ORDER BY id_kamar ASC";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                      die("Query Error: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
                    }

                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <td><?php echo "$no"; ?></td>
                        <td><?php echo $row['tipe_kamar']; ?></td>
                        <td>
                          <img class="d-block" src="gambar/<?php echo $row['foto']; ?>" width="200">
                        </td>
                        <td>Rp.<?php echo $row['harga']; ?></td>
                        <td><?php echo $row['jumlah_kamar']; ?></td>
                        <td><?php echo $row['stock_kamar']; ?></td>
                        <td>
                          <a href="edit_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>" class="btn btn btn-dark">Edit</a>
                          <a href="hapus_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>" class="btn btn btn-dark" onclick="return confirm('Anda yakin akan menghapus data ini...?')">Hapus</a>
                          
                        </td>
                      </tr>
                      <?php $no++; } ?>
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
      </aside>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>

    <div class="modal fade" id="tambahkamar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center"> Tambah Data Kamar </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="tambah_kamar.php" enctype="multipart/form-data">
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
                <label>Foto Kamar</label>
                <input type="file" name="foto" class="form-control">
              </div>  
              <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="harga">
              </div>
              <div class="form-group">
                <label>Jumlah Kamar</label>
                <input type="text" class="form-control" name="jumlah_kamar" placeholder="Jumlah Kamar">
              </div>
              <div class="form-group">
                <label>Stock Kamar</label>
                <input type="text" class="form-control" name="stock_kamar" placeholder="Stock Kamar">
              </div>       
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-dark">Tambahkan Data Kamar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </body>
  </html>