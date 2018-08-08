<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","absensi");
 session_start();
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
$query = "delete from user where id_user=$id";
// mengalihkan halaman kembali ke index.php

 if(mysqli_query($koneksi, $query)){
	header("location: pembimbing.php");
}
 else{
  echo "Gagal";
 }

?>