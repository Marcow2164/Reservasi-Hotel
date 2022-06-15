<?php
include '../koneksi.php';
$id_kamar = $_POST['id_kamar'];
$tipe_kamar   = $_POST['tipe_kamar'];
$foto = $_FILES['foto']['name'];
$harga = $_POST['harga'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$stock_kamar = $_POST['stock_kamar'];
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg');
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
    move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
    $query  = "UPDATE kamar SET tipe_kamar = '$tipe_kamar', foto = '$nama_gambar_baru',harga = '$harga', jumlah_kamar = '$jumlah_kamar', stock_kamar = '$stock_kamar'";
    $query .= "WHERE id_kamar = '$id_kamar'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='kamar.php';</script>";
    }
  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
  }
} else {
  $query  = "UPDATE kamar SET tipe_kamar = '$tipe_kamar' , harga='$harga' ,jumlah_kamar = '$jumlah_kamar' ,stock_kamar = '$stock_kamar'";
  $query .= "WHERE id_kamar = '$id_kamar'";
  $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil diubah.');window.location='kamar.php';</script>";
  }
}


