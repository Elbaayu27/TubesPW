<html>
<head>
  <title>Add Dishes</title>
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
  <h1>Add Dishes</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Code</td>
    <td><input type="text" name="kode"></td>
  </tr>
  <tr>
    <td>Dishes Name</td>
    <td><input type="text" name="nama_dish"></td>
  </tr>
  <tr>
    <td>Category</td>
    <td>
    <input type="radio" name="category" value="Dessert"> Dessert
    <input type="radio" name="category" value="Baverage"> Baverage
    </td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><textarea name="description"></textarea></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="Index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>