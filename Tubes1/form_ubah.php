<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="tinymce/tinymce/tiny_mce.js">
    
  </script>
  <script type="text/javascript">
    tinyMCE.init({
    // General options
    mode : "textareas",
    theme : "advanced",
     
    });
  </script>
</head>
<body>
<h1>Change Dishes</h1>
  
  <?php
  // Load file koneksi.php
  include "Koneksi.php";
  
  // Ambil data Kode yang dikirim oleh index.php melalui URL
  $kode = $_GET['kode'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM dish WHERE kode='".$kode."'";
  $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?kode=<?php echo $kode; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Dishes Name</td>
    <td><input type="text" name="nama_dish" value="<?php echo $data['nama_dish']; ?>"></td>
  </tr>
  <tr>
    <td>Category</td>
    <td>
    <?php
    if($data['category'] == "Dessert"){
      echo "<input type='radio' name='category' value='dessert' checked='checked'> Dessert";
      echo "<input type='radio' name='category' value='baverage'> Baverage";
    }else{
      echo "<input type='radio' name='category' value='dessert'> Dessert";
      echo "<input type='radio' name='category' value='baverage' checked='checked'> Baverage";
    }
    ?>
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" value="<?php echo $data['price']; ?>"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="description"><?php echo $data['description']; ?></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="Index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>