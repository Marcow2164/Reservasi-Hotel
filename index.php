<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyHotel | Welcome</title>
  <link href="assets/images/myhotelLogo.png" rel="shortcut icon" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <style type="text/css">
    body {
      background-image: url("assets/images/myhotelpictures.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
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
    <br />
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="page-header text-center text-dark" style="font-weight: bold; font-family: sans-serif; font-size: 30px;">Selamat Datang Di MyHotel</h1>
              <hr />
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "gagal") { ?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan !!!</h5>
                  Mohon maaf anda tidak bisa mengakses halaman ini
                </div>
            <?php }
            } ?>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-13">
            <div class="card bg-dark">
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/images/myhotelpictures.jpg" alt="First slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/images/kamar/standartroom.jpeg" alt="Second slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/images/kamar/suiteroom.jpeg" alt="Third slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/images/kamar/deluxeroom.jpeg" alt="Fourth slide" height="450">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <form action="proses_pesan.php" method="POST">
          <div class="text-center">
              <div class="card-body">
                <h2 class="text-center">--- Pesan Kamar ---</h2>
                <hr/>
                <div class="row">
                  <label class="col-form-label">Tanggal Cek In : </label>
                  <div class="col-sm-2">
                    <input type="date" name="cek_in" class="form-control" placeholder=".col-3">
                  </div>
                  <label class="col-form-label">Tanggal Cek Out : </label>
                  <div class="col-sm-2">
                    <input type="date" name="cek_out" class="form-control" placeholder=".col-3">
                  </div>
                  <label class="col-form-label">Jumlah Kamar</label>
                  <div class="col-sm-2">
                    <input type="text" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar">
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="form-control btn btn-dark" data-toggle="modal" data-target="#pesan"> Pesan Kamar </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="pesan">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"> Reservation </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nama Pemesan*</label>
                      <input type="text" name="nama_pemesan" class="form-control" placeholder="Masukan Nama Anda...">
                    </div>
                    <div class="form-group">
                      <label>NIK (Sesuai KTP)*</label>
                      <input type="text" name="NIK" class="form-control" placeholder="Masukan NIK Anda...">
                    </div>
                    <div class="form-group">
                      <label>Email Pemesan (Email Yang Aktif)*</label>
                      <input type="text" name="email_pemesan" class="form-control" placeholder="Masukan Email Anda...">
                    </div>
                    <div class="form-group">
                      <label>No. Handphone*</label>
                      <input type="text" name="hp_pemesan" class="form-control" placeholder="Masukan No. Handphone...">
                    </div>
                    <div class="form-group">
                      <label>Alamat (Sesuai KTP)*</label>
                      <input type="text" name="Alamat" class="form-control" placeholder="Masukan Alamat Pemesan">
                    </div>
                    <div class="form-group">
                      <label>Tipe Kamar*</label>
                      <select name="id_kamar" class="form-control">
                        <option value=""> Silahkan Pilih Tipe Kamar... </option>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from kamar");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                          <option value="<?php echo $d['id_kamar']; ?>"><?php echo $d['tipe_kamar']; ?>
                            <?php
                            $stock_kamar = $d['stock_kamar'];
                            if ($stock_kamar > 0) {
                              echo "(kamar kosong " . $stock_kamar . ")";
                            } else {
                              echo "(kamar tidak tersedia)";
                            }
                            ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-dark" data-dismiss="modal"> Cancel </button>
                    <button type="submit" class="btn btn-dark"> Konfirmasi Pesanan </a></button>
                    <a href="buktipesan.php" class="btn btn-dark"> Lihat Bukti Pemesanan </a>
                  </div>

                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </form>
          <br/>
          <div class="card">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="text-center">Tentang Kami</h2>
                <hr /><br>
                <p class="text-center">MyHotel Adalah Hotel dengan harga murah dengan fasilitas yang lengkap antara lain restoran, spa, parkiran yang luas. Lokasi di Jakarta sendiri ada beberapa hotel yang menawarkan harga murah, bahkan sangat murah. Harga murah di sini juga relatif, kami mengkategorikan harga murah di sini adalah hotel dengan harga per malamnya 270 ribuan. Hotel di Jakarta dengan harga 270 ribuan di masa sekarang ini mungkin masuk dalam kategori murah, mengingat harga kebutuhan pokok sekarang ini meningkat.</p>
              </div>
            </div>
          </div>
          
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          </head>

          <body>
            <div class="container">
              <h1 class="mt-5 mb-4 text-center">Rating & Ulasan</h1>
              <hr/>
              <div class="card">
                <div class="card-header text-center" style="font-family: sans-serif; font-size: 20px;"> Rating & Ulasan MyHotel </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 text-center">
                      <h1 class="text-black mt-4 mb-4">
                        <b><span id="average_rating">0.0</span> / 5</b>
                      </h1>
                      <div class="mb-3">
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                      </div>
                      <h3><span id="total_review">0</span> Review</h3>
                    </div>
                    <div class="col-sm-4">
                      <p>
                      <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                      </div>
                      </p>
                      <p>
                      <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                      <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                      </div>
                      </p>
                    </div>
                    <div class="col-sm-4 text-center">
                      <h3 class="mt-4 mb-3">Tulis komentar anda</h3>
                      <button type="button" name="add_review" id="add_review" class="btn btn-dark">Tambahkan Ulasan Anda</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-5" id="review_content"></div>
            </div>
          </body>

</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Rating untuk kami</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-center mt-2 mb-4">
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
          <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
        </h4>
        <div class="form-group">
          <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Masukan nama anda" />
        </div>
        <div class="form-group">
          <textarea name="user_review" id="user_review" class="form-control" placeholder="Komentar"></textarea>
        </div>
        <div class="form-group text-center mt-4">
          <button type="button" class="btn btn-primary" id="save_review">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="main-footer bg-dark text-center">

  <strong>Copyright &copy; MyHotel <a href="https://smkn8bl.sch.id"> SMKN 8 BandarLampung</a> - </strong> All rights reserved.
</footer>

<style>
  .progress-label-left {
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
  }

  .progress-label-right {
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
  }

  .star-light {
    color: #e9ecef;
  }
</style>

<script>
  $(document).ready(function() {

    var rating_data = 0;

    $('#add_review').click(function() {

      $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function() {

      var rating = $(this).data('rating');

      reset_background();

      for (var count = 1; count <= rating; count++) {

        $('#submit_star_' + count).addClass('text-warning');

      }

    });

    function reset_background() {
      for (var count = 1; count <= 5; count++) {

        $('#submit_star_' + count).addClass('star-light');

        $('#submit_star_' + count).removeClass('text-warning');

      }
    }

    $(document).on('mouseleave', '.submit_star', function() {

      reset_background();

      for (var count = 1; count <= rating_data; count++) {

        $('#submit_star_' + count).removeClass('star-light');

        $('#submit_star_' + count).addClass('text-warning');
      }

    });

    $(document).on('click', '.submit_star', function() {

      rating_data = $(this).data('rating');

    });

    $('#save_review').click(function() {

      var user_name = $('#user_name').val();

      var user_review = $('#user_review').val();

      if (user_name == '' || user_review == '') {
        alert("Please Fill Both Field");
        return false;
      } else {
        $.ajax({
          url: "submit_rating.php",
          method: "POST",
          data: {
            rating_data: rating_data,
            user_name: user_name,
            user_review: user_review
          },
          success: function(data) {
            $('#review_modal').modal('hide');

            load_rating_data();

            alert(data);
          }
        })
      }

    });

    load_rating_data();

    function load_rating_data() {
      $.ajax({
        url: "submit_rating.php",
        method: "POST",
        data: {
          action: 'load_data'
        },
        dataType: "JSON",
        success: function(data) {
          $('#average_rating').text(data.average_rating);
          $('#total_review').text(data.total_review);

          var count_star = 0;

          $('.main_star').each(function() {
            count_star++;
            if (Math.ceil(data.average_rating) >= count_star) {
              $(this).addClass('text-warning');
              $(this).addClass('star-light');
            }
          });

          $('#total_five_star_review').text(data.five_star_review);

          $('#total_four_star_review').text(data.four_star_review);

          $('#total_three_star_review').text(data.three_star_review);

          $('#total_two_star_review').text(data.two_star_review);

          $('#total_one_star_review').text(data.one_star_review);

          $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

          $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

          $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

          $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

          $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

          if (data.review_data.length > 0) {
            var html = '';

            for (var count = 0; count < data.review_data.length; count++) {
              html += '<div class="row mb-3">';

              html += '<div class="col-sm-1"><div class="rounded-circle bg-primary text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

              html += '<div class="col-sm-11">';

              html += '<div class="card">';

              html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

              html += '<div class="card-body">';

              for (var star = 1; star <= 5; star++) {
                var class_name = '';

                if (data.review_data[count].rating >= star) {
                  class_name = 'text-warning';
                } else {
                  class_name = 'star-light';
                }

                html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
              }

              html += '<br />';

              html += data.review_data[count].user_review;

              html += '</div>';

              html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

              html += '</div>';

              html += '</div>';

              html += '</div>';
            }

            $('#review_content').html(html);
          }
        }
      })
    }

  });
</script>

</html>
</body>

</html>
</div>

<body>
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