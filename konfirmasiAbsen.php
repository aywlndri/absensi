<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","absensi");
 session_start();
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$ket = $_GET['ket'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM absen WHERE id_kehadiran='$id'"));
$tanggal = $data['tanggal'];
 
// menghapus data dari database
$query = "update absen set status='Terkonfirmasi', kehadiran='$ket' where id_kehadiran=$id";
// mengalihkan halaman kembali ke index.php

 if(mysqli_query($koneksi, $query)){
	header("location: tanggalDipilih.php?tanggal=$tanggal");
}
 else{
  echo "Gagal";
 }

?>