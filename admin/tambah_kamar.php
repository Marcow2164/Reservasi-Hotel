<?php
include '../koneksi.php';

$tipe_kamar = $_POST['tipe_kamar'];
$foto = $_FILES['foto']['name'];
$harga = $_POST['harga'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$stock_kamar = $_POST['stock_kamar'];

if ($foto !="") {
	$ekstensi_diperbolehkan = array('png','jpg','jpeg');
	$x = explode('.', $foto);
	$extensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_gambar_baru = $angka_acak.'-'.$foto;
	if (in_array($extensi, $ekstensi_diperbolehkan) == true) {
		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
		$query = "INSERT INTO kamar (tipe_kamar,foto,harga,jumlah_kamar,stock_kamar) VALUES ('$tipe_kamar', '$nama_gambar_baru', '$harga','$jumlah_kamar','$stock_kamar')";
		$result = mysqli_query($koneksi, $query);

		if (!$result) {
			die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
			echo "<script>alert('Data berhasil ditambah.');window.location='kamar.php';</script>";
		}
		
	} else {
		echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='kamar.php';</script>";
	}
	
} else {
	$query = "INSERT INTO kamar (tipe_kamar,foto,jumlah_kamar,stock_kamar) VALUES ('$tipe_kamar', null)";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	} else {
		echo "<script>alert('Data berhasil ditambah.');window.location='kamar.php';</script>";
	}
}

?>