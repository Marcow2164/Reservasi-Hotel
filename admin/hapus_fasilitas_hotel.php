<?php
include '../koneksi.php';
$id_fasilitas_hotel = $_GET["id_fasilitas_hotel"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
$query = "DELETE FROM fasilitas_hotel WHERE id_fasilitas_hotel='$id_fasilitas_hotel' ";
$hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
if(!$hasil_query) {
  die ("Gagal menghapus data: ".mysqli_errno($koneksi).
   " - ".mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='fasilitas_hotel.php';</script>";
}