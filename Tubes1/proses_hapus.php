<?php
// koneksi database
include 'Koneksi.php';

// menangkap data id yang di kirim dari url
$kode = $_GET['kode'];


// menghapus data dari database
mysqli_query($koneksi,"delete from dish where kode='$kode'");

// mengalihkan halaman kembali ke index.php
header("location:Index.php");

?>