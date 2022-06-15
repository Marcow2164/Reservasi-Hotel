<?php
include '../koneksi.php';
$id_fasilitas_hotel = $_POST['id_fasilitas_hotel'];
$keterangan   = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg');
  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
    move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
    $query  = "UPDATE fasilitas_hotel SET keterangan = '$keterangan', foto = '$nama_gambar_baru'";
    $query .= "WHERE id_fasilitas_hotel = '$id_fasilitas_hotel'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='fasilitas_hotel.php';</script>";
    }
  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='fasilitas_hotel.php';</script>";
  }
} else {
  $query  = "UPDATE fasilitas_hotel SET keterangan = '$keterangan'";
  $query .= "WHERE id_fasilitas_hotel = '$id_fasilitas_hotel'";
  $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil diubah.');window.location='fasilitas_hotel.php';</script>";
  }
}


