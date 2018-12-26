<?php
// Load file Koneksi.php
include "Koneksi.php";
// Ambil Data yang Dikirim dari Form
$kode = $_POST['kode'];
$nama_dish = $_POST['nama_dish'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO dish VALUES('".$kode."', '".$nama_dish."', '".$category."', '".$price."', '".$description."', '".$foto."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: Index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>


<!-- 
<?php 
// koneksi database
include 'Koneksi.php';

// menangkap data yang di kirim dari form
$kode = $_POST['kode'];
$nama_dish = $_POST['nama_dish'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// menginput data ke database
$query = "INSERT INTO dish VALUES('".$kode."', '".$nama_dish."', '".$category."', '".$price."', '".$description."', '".$fotobaru."')";
  $sql = mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke index.php
header("location:Index.php");

?> -->