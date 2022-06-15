<?php 
//Tambahkan Koneksi Databases
include 'koneksi.php';

//menerima data dari form
$cek_in = $_POST['cek_in'];
$cek_out = $_POST['cek_out'];
$jml_kamar = $_POST['jml_kamar'];
$nama_pemesan = $_POST['nama_pemesan'];
$email_pemesan = $_POST['email_pemesan'];
$hp_pemesan = $_POST['hp_pemesan'];
$id_kamar = $_POST['id_kamar'];
$NIK = $_POST['NIK'];
$Alamat = $_POST['Alamat'];

$cekStock = mysqli_query($koneksi, "select * from kamar where id_kamar = '$id_kamar'");

$dataKamar =mysqli_fetch_assoc($cekStock);

if ($cekStock->num_rows > 0) {
    $total = $dataKamar['stock_kamar'] - $jml_kamar;
    //mengirim ke databases
    $pesan = mysqli_query($koneksi, "insert into pesanan values('','$cek_in','$cek_out','$jml_kamar','$nama_pemesan','$email_pemesan','$hp_pemesan','$nama_tamu','$id_kamar','1','$NIK','$Alamat')");
    if ($pesan) {
        mysqli_query($koneksi, "update kamar set stock_kamar='$total' where id_kamar='$id_kamar'");
    }
} else {
    die("gagal pesan kamar");
}

//Sesudah Menginput Di alihkan Ke halaman index
header("location:index.php");
?>